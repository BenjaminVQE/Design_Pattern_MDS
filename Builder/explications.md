# Builder

### 🎯 Problème que ça résout

On veut créer un objet complexe…
mais sa construction nécessite beaucoup d’étapes ou de paramètres.

Exemple :

On doit créer un objet Computer avec :

CPU

RAM

Stockage

Carte graphique

WiFi

Bluetooth

Si on met tout dans le constructeur :

new Computer("i7", 32, 1000, "RTX 4080", true, false)

On ne veut pas modifier :

multiplier les constructeurs

rendre le code illisible

passer des paramètres optionnels dans le désordre

Le pattern Builder sert à construire l’objet étape par étape.

### 🧠 Principe de fonctionnement

Le Builder :

Construit l’objet progressivement

Sépare la construction de la représentation

Retourne l’objet final une fois configuré

C’est un assembleur d’objet complexe.

### 🏗 Structure

Product (objet final complexe)
→ contient les données finales

Builder
→ définit les étapes de construction

ConcreteBuilder
→ implémente les étapes

Director (optionnel)
→ orchestre l’ordre de construction

### 📈 Avantages

Évite les constructeurs trop longs

Améliore la lisibilité

Permet différentes configurations du même objet

Respecte le principe Single Responsibility

### ⚠️ Inconvénients

Ajoute des classes supplémentaires

Peut être excessif pour des objets simples

Augmente légèrement la complexité

### 🧩 Cas d’usage réel possible

Création d’un objet de configuration

Construction d’un email (sujet, corps, pièces jointes)

Création d’une requête SQL complexe

Création d’un objet métier avec beaucoup d’options

Construction d’un objet immuable
