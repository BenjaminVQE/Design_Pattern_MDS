<?php

class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;
    private PDO $connection;

    private function __construct()
    {
        $host = 'localhost';
        $dbname = 'test_db';
        $username = 'root';
        $password = '';

        try {
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}

$db1 = DatabaseConnection::getInstance()->getConnection();

$stmt = $db1->query("SELECT NOW() as current_time");
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo "Heure serveur : " . $result['current_time'] . PHP_EOL;

$db2 = DatabaseConnection::getInstance()->getConnection();

var_dump($db1 === $db2);
