# State

### 🎯 Problème que ça résout

Quand un objet change de comportement selon son état interne, on finit souvent avec :

beaucoup de if / else

des switch complexes

une classe difficile à maintenir

Le pattern State permet de déléguer les comportements spécifiques à des classes représentant chaque état.

Ainsi, l’objet change de comportement en changeant simplement d’état.

### 🧠 Principe de fonctionnement

Au lieu d’avoir :

if ($status === "paid") { ... }
elseif ($status === "shipped") { ... }

On crée :

une interface State

plusieurs classes concrètes représentant les états

un contexte qui délègue le comportement à l’état courant

Changer d’état = changer d’objet.

### 🏗 Structure

State (interface)

définit les méthodes communes

ConcreteState

implémente un comportement spécifique

peut modifier l’état du contexte

Context

contient une référence vers un State

délègue le comportement à l’état courant

### 📈 Avantages

Supprime les gros if/switch

Respect du principe Open/Close

Code plus clair et modulaire

Chaque état est isolé

### ⚠️ Inconvénients

Multiplie les classes

Peut être overkill pour des cas simples

### 🧩 Cas d’usage réel possible

Workflow de commande

Machine à états

Cycle de vie d’un document

Processus métier (validation, paiement, expédition…)
