# Créer votre premier block

## Concept  

Un module peut enregistrer **plusieurs blocks**
Vous trouverez en exemple notre module **classicblocks** qui reprend les 4 modules PrestaShop essentiels:
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
            'icon_path' => 'https://yoursite.com/img/icon.png', // custom icon
            'need_reload' => true, // reload iframe after save
            'nameFrom' => 'field_name' // take the name of a config field
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

Depuis la version `2.0.0` vous pouvez utiliser notre inferface fournie afin d'avoir une structure plus lisible: 
Veuillez tout d'abord créer une classe pour votre block: 

```php
<?php 


use PrestaSafe\PrettyBlocks\Core\Interface\BlockInterface;

class MyCustomBlock implements BlockInterface
{
    private $module;
    
    public function __construct($module)
    {
        $this->module = $module;
    }


    public function registerBlocks(): array
    {
        return  
        [
            'name' => $this->module->l('Fake block'),
            'description' => $this->module->l('Description of your block'),
            'code' => 'fake_block', // required must be uniq
            'icon' => 'StarIcon', // https://heroicons.com V2
            'icon_path' => 'https://yoursite.com/img/icon.png', // custom icon
            'need_reload' => true, // reload iframe after save
            'nameFrom' => 'field_name' // take the name of a config field
            'insert_default_values' => true, // new since 2.0.0 
            'templates' => [
                'default' =>  'module:'.$this->name.'/views/templates/block/default.tpl'
            ],
            'config' => [
                'fields' => [
                    // ... array of fields
                ]
            ],
            'repeater' => [
                'name' => $this->module->l('Element repeated'),
                'nameFrom' => $this->module->l('field name'),
                'groups' => [
                    // ... array of fields
                ]
            ]
        ];
    }
}
```

Puis dans votre module, sur le hook `ActionRegisterBlock` enregistrez votre block comme ceci: 

```php
public function hookActionRegisterBlock()
{

    return HelperBuilder::renderBlocks(
        [
            new MyCustomBlock($this)  
            // new MySecondCustomBlock($this)  
        ]
    );
}
```

Le hook **ActionRegisterBlock** est prévu pour enregistrer un ou plusieurs block(s) dans le **Prettyblocks**.
Vous pouvez utiliser les 2 exemples pour enregistrer vos blocks.
Si vous utilisez l'interface fournie, pensez bien à faire en sorte que composer charge vos classes de blocks automatiquement comme ceci: 
```
{
    "name": "company/your_module",
    "description": "your description",
    "license": "AFL-3.0",
    "keywords": [
      "prestashop",
    ],
    "authors": [
      {
        "name": "Authors",
        "homepage": "https://...."
      }
    ],
    "config": {
      "preferred-install": "dist",
      "prepend-autoloader": false
    },
    "autoload": {
      "classmap": [
        "classes/blocks"
      ],
      "exclude-from-classmap": []
    },
    "type": "prestashop-module"
  }
```
dans cet exemple, nos blocks sont dans le dossier `classes/blocks` de notre module 
faites ensuite un `composer dump-autoload` dans votre dossier de module.
Si vos blocks ne sont pas chargés, n'oubliez pas d'ajouter l'autoload dans votre module
```php
<?php 

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}
class FakeModule extends Module implements WidgetInterface
{
    // ... 
```

## Détails d'un block

| Champs            | Description                                      | Type     | Required    |
| -----------       | -----------                                      | -------- | ----------- |        
| <code>name</code>        | Nom d'affichage de votre block                   | <code style="color:#7ec699">String</code> | <code>true</code>      |
| <code>description</code> | Description de votre block                        | <code style="color:#7ec699">String</code> | <code>true</code>      |
| <code>code</code>        | Description de votre block **doit absolument être unique** | <code style="color:#7ec699">String</code> | <code>true</code>      |
| <code>icon</code>        | Icon heroicons (v2) en format camelCase <br>ex: `academic-cap` => `AcademicCapIcon` <br> Liste disponible ici: [Heroicons](https://heroicons.com/)| <code style="color:#7ec699">String</code> | <code>false</code>      |
| <code>icon_path</code>   | Url de votre icon personnalisé | <code style="color:#7ec699">String</code> | <code>false</code>      |
| <code>nameFrom</code>        | Donner un nom custom à votre block<br>ex: `title` <br> Prendra le valeur du contenu du champs de configuration `title`| <code style="color:#7ec699">String</code> | <code>false</code>      |
| <code>need_reload</code> | Rechargement de l'iframe après avoir sauvegardé un block, utile si vous développez un block de type slider par exemple <br> Default: `true`| <code style="color:#7ec699">Bool</code> | <code>false</code>       |
| <code>insert_default_values</code> | Mets les valeurs des champs par défaut (les champs doivent avoir l'option `'force_default_value' => true,`) lors de l'insertion du block (afin d'avoir des données de démonstration) <br> Default: `false`| <code style="color:#7ec699">Bool</code> | <code>false</code>       |
| <code>templates</code>   | Templates de votre block, **il est impératif d'avoir un template avec la clé `default`** <br> Vous pouvez enregistrer autant de templates que vous souhaitez | <code style="color:#7ec699">Array</code> | <code>true</code>      |
| <code>config</code>      | Champs de configuration de votre block <br> **Doit avoir un tableau de champs <br>`'fields' => [ /*... fields ...*/ ]`** <br> voir [Champs disponibles](#champs-disponibles)  | <code style="color:#7ec699">Array</code> | <code>false</code>   |
| <code>repeater</code>      | Champs répétables <br> Plus de détails [Champs répétable](#champs-repetables) | <code style="color:#7ec699">Array</code> | <code>false</code>   |

## Champs répétables
Les champs répétables vous permettront de mettre autant de données que l'utilisateur le souhaite. 
Plusieurs paramètres sont requis. 


| Champs            | Description                                      | Type     | Required    |
| -----------       | -----------                                      | -------- | ----------- |        
| <code>name</code>        | Nom par défaut des éléments listés | <code style="color:#7ec699">String</code> | <code>true</code>  |
| <code>nameFrom</code>        | Prend le nom de la valeur du champs répété <br> ex: `'nameFrom' => 'title'` affichera la valeur du champs title dans la liste | <code style="color:#7ec699">String</code> | <code>false</code>  |
| <code>groups</code>        | Liste des champs <br> voir [Champs disponibles](#champs-disponibles)  | <code style="color:#7ec699">Array</code> | <code>false</code>  |
