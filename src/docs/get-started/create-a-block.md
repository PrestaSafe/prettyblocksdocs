# Creer votre premier block

## Concept  

Un module peut enregistrer **plusieurs blocks**
Vous trouverez en exemple notre module **classicblocks** qui reprends les 4 modules PrestaShop essentiels:
- Slider
- Bannière
- Text personnalisé
- Produits phares

[=> Github des classicblocks ](https://github.com/PrestaSafe/classicblocks)


### Module  

Voici la structure classique d'un module.

```php
<?php 

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
class FakeModule extends Module implements WidgetInterface
{
    public function __construct()
    {
        $this->name = 'fakemodule';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'PrestaSafe';
        $this->need_instance = 1;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Fake module');
        $this->description = $this->l('Fake module');
        
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install() && $this->registerHook('ActionRegisterBlock');
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->unregisterHook('ActionRegisterBlock');
    }
    
    // Register blocks here.
    public function hookActionRegisterBlock()
    {
        $blocks = [];
        $blocks[] = [
            'name' => 'Fake block',
            'description' => 'Description of your block',
            'code' => 'fake_block', // required must be uniq
            'icon' => 'StarIcon', // https://heroicons.com V2
            'need_reload' => true, // reload iframe after save
            'templates' => [
                'default' =>  'module:'.$this->name.'/views/templates/block/default.tpl'
            ],
            'config' => [
                'fields' => [
                    // ... array of fields
                ]
            ],
            'repeater' => [
                'name' => 'Element repeated',
                'nameFrom' => 'field name',
                'groups' => [
                    // ... array of fields
                ]
            ]

        ]

        return $blocks;
    }

}

```

Le hook **ActionRegisterBlock** est prévu pour enregistrer un ou plusieurs block(s) dans le **Prettyblocks**.

## Détails d'un block

| Champs            | Description                                      | Type     | Required    |
| -----------       | -----------                                      | -------- | ----------- |        
| <code>name</code>        | Nom d'affichage de votre block                   | <code style="color:#7ec699">String</code> | <code>true</code>      |
| <code>description</code> | Description de votre block                        | <code style="color:#7ec699">String</code> | <code>true</code>      |
| <code>code</code>        | Description de votre block **doit absolument être unique** | <code style="color:#7ec699">String</code> | <code>true</code>      |
| <code>icon</code>        | Icon heroicons (v2) en format camelCase <br>ex: `academic-cap` => `AcademicCapIcon` <br> Liste disponible ici: [Heroicons](https://heroicons.com/)| <code style="color:#7ec699">String</code> | <code>false</code>      |
| <code>need_reload</code> | Rechargement de l'iframe après avoir sauvegardé un block, utile si vous développer un block de type slider par exemple <br> Default: `true`| <code style="color:#7ec699">String</code> | <code>false</code>       |
| <code>templates</code>   | Templates de votre blocks, **il est impératif d'avoir un template avec la clé `default`** <br> Vous pouvez enregistrer autant de templates que vous souhaitez | <code style="color:#7ec699">Array</code> | <code>true</code>      |
| <code>config</code>      | Champs de configuration de votre block <br> **Doit avoir un tableau de champs <br>`'fields' => [ /*... fields ...*/ ]`** <br> voir [Champs disponibles](#champs-disponibles)  | <code style="color:#7ec699">Array</code> | <code>false</code>   |
| <code>repeater</code>      | Champs répétables <br> Plus de détails [Champs répétable](#champs-repetables) | <code style="color:#7ec699">Array</code> | <code>false</code>   |

## Champs répétables
Les champs répétables vous permettront de mettre autant de données que l'utilisateur le souhaite. 
Plusieurs paramètres sont requis. 


| Champs            | Description                                      | Type     | Required    |
| -----------       | -----------                                      | -------- | ----------- |        
| <code>name</code>        | Nom par défaut des elements listés | <code style="color:#7ec699">String</code> | <code>true</code>  |
| <code>nameFrom</code>        | Prends le nom de la valeur du champs répété <br> ex: `'nameFrom' => 'title'` affichera la valeur du champs title dans la liste | <code style="color:#7ec699">String</code> | <code>false</code>  |
| <code>repeater</code>        | Liste des champs <br> voir [Champs disponibles](#champs-disponibles)  | <code style="color:#7ec699">Array</code> | <code>false</code>  |
