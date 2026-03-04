# Strategy

### 🎯 Problème que ça résout

On veut appliquer différents comportements…
mais on ne veut pas multiplier les conditions dans notre code.

Exemple :

On doit calculer un prix avec :

Paiement par carte

Paiement par PayPal

Paiement par crypto

Si on fait :

if ($type === "card") { ... }
elseif ($type === "paypal") { ... }
elseif ($type === "crypto") { ... }

On ne veut pas :

multiplier les if / else

modifier la classe à chaque nouveau comportement

mélanger logique métier et variations d’algorithmes

Le pattern Strategy permet de rendre les comportements interchangeables.

### 🧠 Principe de fonctionnement

La Strategy :

Définit une famille d’algorithmes

Encapsule chaque algorithme dans une classe

Les rend interchangeables à l’exécution

Le contexte délègue le travail à la stratégie choisie

C’est un remplacement propre des conditions multiples.

### 🏗 Structure

Strategy (interface commune)
→ définit le contrat des algorithmes

ConcreteStrategy
→ implémente une variante de l’algorithme

Context
→ contient une référence vers une Strategy
→ délègue l’exécution à la Strategy

### 📈 Avantages

Évite les structures conditionnelles complexes

Respecte le principe Open/Close

Permet d’ajouter un comportement sans modifier le contexte

Facilite les tests unitaires

### ⚠️ Inconvénients

Ajoute plusieurs classes

Peut complexifier si peu de variantes

Le choix de la stratégie doit être géré proprement

### 🧩 Cas d’usage réel possible

Différents modes de paiement

Différentes stratégies de livraison

Algorithmes de tri interchangeables

Systèmes de réduction / promotions

Systèmes d’authentification différents
