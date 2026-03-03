# Factory Method

### 🎯 Problème qu’il résout

Lorsqu’un système doit créer des objets sans connaître à l’avance leur classe exacte, le code devient dépendant de conditions (if, switch) et difficile à maintenir.
On veut déléguer la responsabilité de création à des sous-classes.

### 🧠 Principe de fonctionnement

Le pattern définit une méthode de création abstraite dans une classe mère.
Les sous-classes décident quelle classe concrète instancier.

Ainsi, le code client dépend d’une abstraction et non d’une classe concrète.

### 🏗 Structure

Produit (interface) : c’est le contrat commun. Il garantit que toutes les pièces auront une méthode validate(), peu importe leur type (Euro, Dollar, Yen, etc.).

Produits concrets : ce sont les pièces réelles (ex : EuroCoin, DollarCoin, YenCoin) qui implémentent l’interface et définissent leur propre logique de validation.

Créateur abstrait : il définit une méthode abstraite createCoin(). Il oblige toutes les classes filles à implémenter cette méthode, mais il ne sait pas quel type de pièce sera créé.

Créateurs concrets : ce sont les classes spécifiques (EuroCoinCreator, DollarCoinCreator, YenCoinCreator) qui implémentent createCoin() et choisissent quel type de pièce concrète instancier.

### 📈 Avantages

Respect du principe Open/Close

Supprime les conditions complexes

Facilite l’extension

### ⚠️ Inconvénients

Multiplie les classes

Peut sembler excessif pour des cas simples

### 🧩 Cas d’usage réel possible

Système de génération de documents (PDF, CSV, JSON) selon le type demandé par un client professionnel.
