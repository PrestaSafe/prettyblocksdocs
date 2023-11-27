---
title: Introduction 
order: 001
---
# Prettyblocks

Prettyblocks est un tout nouveau système de création de contenu de type "Blocks" conçu spécifiquement pour [**PrestaShop**](https://www.prestashop-project.org). Ce système est également appelé **Page builder**. 

Ce dernier est compatible **PrestaShop 1.7, 8.0.X et fonctionne avec tous les thèmes** :) 


 <img src="{{ asset('img/hello-prettyblocks.png') }}" class="px-12">

Cette documentation est orientée développeur et à pour but de montrer comment exploiter PrettyBlocks. 

## Concept

En partant du constat que, dans PrestaShop, un module ne peut être greffé qu'une seule fois sur un hook, nous avons décidé de développer un système de type Page Builder
afin de simplifier la vie des marchands et des développeurs en créant un système et à la fois innovant et relativement simple d'utilisation: **PrettyBlocks** est né. 

Grâce à ce dernier, vous allez pouvoir créer des 'blocks' puis les placer sur des **zones**.

Ces zones peuvent être des Hooks ou non, vous pourrez également les placer où bon vous semble dans vos thèmes :) 

## Télécharger le module

Dans un premier temps, nous vous invitons à télécharger le module ici [PrettyBlocks en dernière version Stable](https://github.com/PrestaSafe/prettyblocks/releases/latest)

## Installer depuis GitHub

```bash
cd modules
git clone https://github.com/PrestaSafe/prettyblocks.git
cd prettyblocks
composer install #or composer install --no-dev if you have issues
cd _dev
npm install && npm run build
cd ../../../ && php bin/console prestashop:module install prettyblocks
```
