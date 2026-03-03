# Observer

### 🎯 Problème que ça résout

Lorsqu’un objet change d’état, plusieurs autres objets doivent être informés automatiquement.

Sans Observer, on crée :

du couplage fort

des appels directs entre classes

un code difficile à maintenir

Le pattern Observer permet de notifier automatiquement plusieurs objets lorsqu’un changement se produit, sans que l’objet principal connaisse les détails des observateurs.

### 🧠 Principe de fonctionnement

Le pattern repose sur deux rôles :

Subject (Observable) : l’objet observé

Observer : les objets qui réagissent aux changements

Le Subject :

stocke une liste d’observateurs

permet d’attacher/détacher des observers

les notifie lors d’un changement d’état

Les Observers :

implémentent une méthode update()

réagissent lorsqu’ils sont notifiés

### 🏗 Structure

Subject (interface)

attach()

detach()

notify()

Observer (interface)

update()

ConcreteSubject

contient l’état

déclenche notify() quand il change

ConcreteObservers

implémentent update()

exécutent une action spécifique

### 📈 Avantages

Faible couplage

Extensible facilement

Respect du principe Open/Close

Ajout d’observateurs sans modifier le sujet

### ⚠️ Inconvénients

Peut générer beaucoup de notifications

Ordre d’exécution non garanti

Debug plus complexe si trop d’observateurs

### 🧩 Cas d’usage réel possible

Système de notifications

Mise à jour d’interface graphique

Event system

Envoi d’email/log après action
