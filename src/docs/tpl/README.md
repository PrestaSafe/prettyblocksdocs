# Données
Les templates utilisés sont des template utilisant le moteur de template principale de PrestaShop: `Smarty`

Chaque templates doivent être enregistrés en utilisant la nouvelle syntaxe de PrestaShop: 

Exemple: `module:modulemodule/views/templates/hook/front.tpl`

::: tip
**TOUS les templates peuvent être overridés par un theme parent ou enfant.** 
:::


Ex: pour un template localisé dans: `/modules/modulemodule/views/templates/hook/front.tpl` 
utlisant la syntaxe: `module:modulemodule/views/templates/hook/front.tpl`

Ce dernier peut être surclassé en le plaçant dans un thème: 
`/themes/montheme/modules/modulemodule/views/templates/hook/front.tpl`

## Utiliser les données du bloc

PrettyBloc renvoi dans chaque blocs, un variable nommée: `$block`

### Configuration
Toutes les données définies dans la section `config` peuvent être exploitées sous cette forme:

`{$block.settings.{$nom_de_la_cle}}`

```php 
// exemple
'config' => [
    'fields' => [
        'title' => [
            'type' => 'text', // type of field
            'label' => 'Title', // label to display
            'default' => 'Customer reviews' // default value 
        ],
        'color' => [
            'type' => 'color', // type of field
            'label' => 'Choose à background color', // label to display
            'default' => '#121212' // default value 
        ]
],
```

Pour récupérer `title` placez dans vos templates: `{$block.settings.title}`

Pour `color` => `{$block.settings.color}` etc... 


### Champs répétables

Comme pour les champs de configuration, les champs répétables (`repeater`) sont également présents dans chaque blocs
Vous pouvez les utilisez avec cette variable: `{$block.states}`


```php 
// exemple
'repeater' => [
    'name' => 'Element repeated',
    'nameFrom' => 'title',
    'groups' => [
        'title' => [
            'type' => 'text', // type of field
            'label' => 'Title', // label to display
            'default' => 'Customer reviews' // default value 
        ],
        'color' => [
            'type' => 'color', // type of field
            'label' => 'Choose à background color', // label to display
            'default' => '#121212' // default value 
        ]
    ]
]

```

Exemple pour utiliser les éléments répétables dans ses templates. 

```smarty
    {foreach from=$block.states item=$state}
        {$state.title}
        {$state.color}
    {/foreach}
```