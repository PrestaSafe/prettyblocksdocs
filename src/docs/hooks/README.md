# Hooks disponibles
Afin d'étendre au mieux les fonctionnalités de **PrettyBlocks**, nous avons implémenté
certains hooks pour faciliter la vie des développeurs.

## Register Hooks (ActionRegisterBlock)

En greffant votre module sur le hook **ActionRegisterBlock** vous pourrez simplement rajouter vos blocs. 

```php
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
```

## Register Settings (ActionRegisterThemeSettings)

Le hook **ActionRegisterThemeSettings** vous permettra d'enregistrer des paramètres généraux pour votre thème. 
Pour enregistrer des paramètres, vous devez retourner un tableau de [Champs](/get-started/fields-available) 
Seul le paramètre <code>tab</code> vous permettra d'ajouter votre paramètre dans un tab existant, ou de le créer si il n'existe pas. 
ex: ` 'tab' => 'design' ` placera le paramètre dans un onglet `Design`
```php
public function hookActionRegisterThemeSettings()
{
    return [
        'settings_name' => [
            'tab' => 'design',
            'type' => 'color',
            'default' => '#000000',
            'label' => 'Change your color'
        ],
        'select' => [
            'tab' => 'TEST',
            'type' => 'select',
            'label' => 'Select field', 
            // 'default' => '2',
            'choices' => [
                '1' => 'Value 1',
                '2' => 'Value 2',
                '3' => 'Value 3',
            ]
        ],
        'radio_group' => [
            'tab' => 'TEST',
            'type' => 'radio_group',
            'label' => 'Choose a value', 
            'default' => '3',
            'choices' => [
                '1' => 'Radio 1',
                '2' => 'Radio 2',
                '3' => 'Radio 3',
            ]
        ],
        'settings_name_radio' => [
            'tab' => 'design',
            'type' => 'radio',
            'default' => false,
            'label' => 'Add this option'
        ],
        'settings_name_textarea' => [
            'tab' => 'Custom tabs !',
            'type' => 'textarea',
            'default' => 'Hello you !',
            'label' => 'type textarea'
        ],
        'new_logo' => [
            'tab' => 'design',
            'type' => 'fileupload',
            'label' => 'File upload',
            'path' => '$/fakemodule/views/images/test/',
            'default' => [
                ['url' => 'https://via.placeholder.com/141x180'],
            ],
        ]
    ];
}
```


## Extend block (beforeRenderingBlock{BlockCode})

Afin d'étendre les données de votre block, vous pouvez rajouter des données via ce hook: 
Exemple pour un block aillant pour code: `category_products`
un hook est exécuté avec le code du block en camelCase:  `hookbeforeRenderingblockCategoryProducts`

Vous pouvez utiliser toutes les données de votre bloc dans le `$params['block']`
```php 
 public function hookbeforeRenderingClassicFeaturedProduct($params)
    {
        $settings = $params['block']['settings'];

        if($settings)
        {
            if(isset($settings['category']['id']))
            {
                $id_category = (int)$settings['category']['id'];
                return ['products' => $this->getProducts($id_category)];
            }
        }
        return ['products' => false];

    }

```

Toutes les clés retournées pourront être utilisées dans la variable `$block.extra` sur le front office. 
Résulat de notre exemple: `$block.extra.products` retournera un tableau de produits. 


## Extends Templates (actionExtendBlockTemplate{BlockCode})

Pourquoi devoir refaire un bloc ou un module afin de modifier un simple affichage ? 
Un module peut rajouter un ou plusieurs templates en fonction d'un bloc. 

Comme pour l'exemple précédent, pour un bloc aillant le code `block_category_products`
vous pouvez rajouter un ou plusieurs templates pour ce dernier: 

```php
 public function hookactionExtendBlockTemplateBlockCategoryProducts($params)
{
    return [
        'override1' => 'module:'.$this->name.'/views/templates/blocks/template1.tpl',
        'override2' => 'module:'.$this->name.'/views/templates/blocks/template2.tpl',
    ];
}
```

## SASS compilation (ActionQueueSassCompile)

Prettyblocks vous mâche votre travail de développeur, grâce à ce hook, vous pouvez
compiler vos styles SASS ou CSS. <br> 
Notre helper utilise la librairie [scssphp](https://scssphp.github.io/scssphp/)

Voici un exemple: 

```php
 public function hookActionQueueSassCompile()
    {
        $vars = [
            'import_path' => [
                '$/themes/classic/_dev/css/'
            ],
            'entries' => [
                '$/modules/'.$this->name.'/views/css/vars.scss'
            ],
            'out' => '$/themes/classic/_dev/css/helpers/_custom_vars.scss'
        ];

        $theme = [
            'import_path' => [
                '$/themes/classic/_dev/css/'
            ],
            'entries' => [
                '$/themes/classic/_dev/css/theme.scss'
            ],
            'out' => '$/themes/classic/assets/css/theme.css'
        ];


        return [$vars, $theme];
    }
```

Afin de mieux l'exploiter, vous pouvez simplement utiliser les `Themes settings` dans un fichier `scss` ou `css` et **Prettyblocks** se charge du reste. 
Il n'est donc pas nécessaire de compiler avec NPM ou yarn, cela dit, pour les plus fan de ces technologies, 
vous pouvez utiliser ces outils sans perturber le fonctionnement du builder :) 
`import_path`: ajoute un chemin d'import (CF lib [scssphp](https://scssphp.github.io/scssphp/))
`entries`: les fichiers à mettre en entrée (pas de limite de nombre)
`out`: le fichier qui sera compilé en sortie

Ex: avec la variable `$sass`

```php

    $vars = [
        'import_path' => [
            '$/themes/classic/_dev/css/'
        ],
        'entries' => [
            '$/modules/'.$this->name.'/views/css/vars.scss'
        ],
        'out' => '$/themes/classic/_dev/css/helpers/_custom_vars.scss'
    ];

```
Contenu du fichier `'$/modules/'.$this->name.'/views/css/vars.scss'` 

```scss
    $gray-900:  $SETTINGS_bg_dark !default;
    $icon-color-top-bar: $SETTINGS_icon_top_bar_color !default;
    $primary: $SETTINGS_primary_color !default;
    ...

```

Fichier compilé par **PrettyBlocks** `$/themes/classic/_dev/css/helpers/_custom_vars.scss`

```scss
    $gray-900:  #373f50 !default;
    $icon-color-top-bar: #fe696a !default;
    $primary: #fe696a !default;
   ...

```

`$SETTINGS_bg_dark` a pris la valeur du `Theme Settings` qui a pour nom `bg_dark`
il est obligatoire d'utiliser `$SETTINGS_` + `{nom_du_settings}` afin de faire matcher la valeur. 