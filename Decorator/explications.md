# Decorator

### 🎯 Problème qu’il résout

Lorsqu’on souhaite ajouter des fonctionnalités supplémentaires à un objet sans modifier sa classe, on risque de multiplier les sous-classes pour chaque combinaison possible.
Cela rend le code difficile à maintenir et peu flexible.
On veut pouvoir ajouter des comportements dynamiquement, sans toucher au code existant.

### 🧠 Principe de fonctionnement

Le pattern consiste à définir une interface commune, puis à créer des classes décoratrices qui implémentent cette même interface et contiennent une référence vers l’objet qu’elles décorent.

Chaque décorateur ajoute un comportement supplémentaire avant ou après l’appel à l’objet encapsulé.

Ainsi, on peut enrichir un objet progressivement, en l’enveloppant avec un ou plusieurs décorateurs.

### 🏗 Structure

Composant (interface) : c’est le contrat commun. Il garantit que tous les abonnements auront les méthodes getPrice() et getDescription(), peu importe les options ajoutées.

Composant concret : c’est l’abonnement de base (ex : BasicSubscription) qui définit le comportement principal.

Décorateur abstrait : il implémente l’interface et contient une référence vers un objet de type Subscription. Il sert de base aux décorateurs concrets.

Décorateurs concrets : ce sont les classes spécifiques (ex : Option4K, MultiScreenOption, NoAdsOption) qui ajoutent un comportement supplémentaire en modifiant le prix ou la description.

### 📈 Avantages

Respect du principe Open/Close

Ajout dynamique de fonctionnalités

Évite l’explosion du nombre de sous-classes

Grande flexibilité dans les combinaisons

### ⚠️ Inconvénients

Multiplie les objets

Peut rendre le code plus difficile à lire

L’empilement de décorateurs peut devenir complexe

### 🧩 Cas d’usage réel possible

Plateforme de streaming professionnelle où un abonnement de base peut être enrichi avec différentes options (4K, multi-écrans, suppression des publicités), combinables librement selon les besoins du client.
