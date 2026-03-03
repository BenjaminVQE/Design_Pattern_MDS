# Adapter

### 🎯 Problème que ça résout

On veut utiliser une classe existante…
mais son interface n’est pas compatible avec notre code.

Exemple :

Notre application attend une méthode pay($amount)

Mais une API externe fournit makePayment($sum)

On ne veut pas modifier :

ni notre code

ni la classe externe

Le pattern Adapter sert à faire le pont entre les deux.

### 🧠 Principe de fonctionnement

L’Adapter :

Implémente l’interface attendue par notre application

Contient une instance de la classe incompatible

Traduit les appels pour les rendre compatibles

C’est un traducteur d’interface.

### 🏗 Structure

Target (interface attendue)
→ définit le contrat utilisé par notre code

Adaptee (classe existante incompatible)
→ classe qu’on ne peut pas modifier

Adapter
→ implémente Target
→ encapsule Adaptee
→ convertit les appels

### 📈 Avantages

Permet d’intégrer du code existant

Respect du principe Open/Close

Évite de modifier du code legacy

Facilite l’intégration d’API externes

### ⚠️ Inconvénients

Ajoute une couche supplémentaire

Peut multiplier les classes si mal utilisé

### 🧩 Cas d’usage réel possible

Intégration d’une API de paiement externe

Adaptation d’une librairie legacy

Migration progressive d’un système
