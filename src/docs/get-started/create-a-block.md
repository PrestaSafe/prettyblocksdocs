# Creer votre premier block

## Concept  

Un module peut créer **plusieurs blocs**
Tout au long de cette documentation, nous reprendons un module essentiel: **Le module de produits phares**
Afin de pouvoir utiliser ce module à plusieurs endroits. 

### Module  

Voici une structure classic d'un module.

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

Le hook **ActionRegisterBlock** est prévu pour enregistrer un block dans le builder.

## Détails d'un bloc

| Champs            | Description                                      | Type     | Required    |
| -----------       | -----------                                      | -------- | ----------- |        
| <code style="color:red">name</code>        | Nom d'affichage de votre bloc                   | <code style="color:green">String</code> | <code style="color:red">true</code>      |
| <code style="color:red">description</code> | Description de votre bloc                        | <code style="color:green">String</code> | <code style="color:red">true</code>      |
| <code style="color:red">code</code>        | Description de votre bloc **doit absolument être unique** | <code style="color:green">String</code> | <code style="color:red">true</code>      |
| <code style="color:red">icon</code>        | Icon heroicons (v2) en format camelCase <br>ex: `academic-cap` => `AcademicCapIcon` | <code style="color:green">String</code> | <code style="color:red">false</code>      |
| <code style="color:red">need_reload</code> | Rechargement de l'iframe après avoir sauvegardé un bloc, utile si vous développer un block de type slider par exemple <br> Default: `true`| <code style="color:green">String</code> | <code style="color:red">false</code>       |
| <code style="color:red">templates</code>   | Templates de votre blocs, **il est impératif d'avoir un template avec la clé `default`** <br> Vous pouvez enregistrer autant de templates que vous souhaitez | <code style="color:green">Array</code> | <code style="color:red">true</code>      |
| <code style="color:red">config</code>      | Champs de configuration de votre bloc <br> **Doit avoir un tableau de champs <br>`'fields' => [ /*... fields ...*/ ]`** <br> voir [Champs disponibles](#champs-disponibles)  | <code style="color:green">Array</code> | <code style="color:red">false</code>   |
| <code style="color:red">repeater</code>      | Champs répétables <br> Plus de détails [Champs répétable](#champs-repetables) | <code style="color:green">Array</code> | <code style="color:red">false</code>   |

## Champs répétables
Les champs répétables vous permettront de mettre autant de données que l'utilisateur le souhaite. 
Plusieurs paramètres sont requis. 


| Champs            | Description                                      | Type     | Required    |
| -----------       | -----------                                      | -------- | ----------- |        
| <code style="color:red">name</code>        | Noms par défaut des elements listés | <code style="color:green">String</code> | <code style="color:red">true</code>  |
| <code style="color:red">nameFrom</code>        | Prends le nom de la valeur du champs répété <br> ex: `'nameFrom' => 'title'` affichera la valeur du champs title dans la liste | <code style="color:green">String</code> | <code style="color:red">false</code>  |
| <code style="color:red">repeater</code>        | Liste des champs <br> voir [Champs disponibles](#champs-disponibles)  | <code style="color:green">Array</code> | <code style="color:red">false</code>  |
