# Singleton

### 🎯 Problème que ça résout

Dans certaines applications, on a besoin d’un objet unique accessible partout, comme :

une connexion à une base de données

une configuration globale

un gestionnaire de logs

Le Singleton garantit qu’il n’y a qu’une seule instance de la classe dans toute l’application.

### 🧠 Principe de fonctionnement

Le Singleton :

rend le constructeur privé (donc impossible à instancier directement)

stocke l’instance dans une propriété statique

fournit une méthode getInstance() qui retourne toujours la même instance

### 🏗 Structure

Classe Singleton :

constructeur privé

propriété statique $instance

méthode getInstance()

Autres méthodes :

méthodes métier (ex : set(), get())

### 📈 Avantages

Une seule instance, donc pas de duplication

Accès global simple

Pratique pour des ressources partagées

### ⚠️ Inconvénients

Couplage fort (difficile à tester)

Peut masquer des dépendances

Risque d’utilisation abusive (anti-pattern si mal utilisé)

### 🧩 Cas d’usage réel possible

Gestion d’un cache global dans une application.
