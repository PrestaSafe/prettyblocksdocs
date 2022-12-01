# Templating

Les templates utilisés sont des templates utilisant le moteur de template principal de PrestaShop: `Smarty`

Chaque template doit être enregistré en utilisant la nouvelle syntaxe de PrestaShop: 

Exemple: `module:modulemodule/views/templates/hook/front.tpl`

::: tip
**TOUS les templates peuvent être overridés par un thème parent ou enfant.** 
:::


Ex: pour un template localisé dans: `/modules/modulemodule/views/templates/hook/front.tpl` 
utlisant la syntaxe: `module:modulemodule/views/templates/hook/front.tpl`

Ce dernier peut être surclassé en le plaçant dans un thème: 
`/themes/montheme/modules/modulemodule/views/templates/hook/front.tpl`

## Utiliser les données du bloc

**PrettyBlocks** renvoie dans chaque block, une variable nommée: `$block`

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
            'label' => 'Choose a background color', // label to display
            'default' => '#121212' // default value 
        ]
],
```

Pour récupérer `title` placez dans vos templates: `{$block.settings.title}`

Pour `color` => `{$block.settings.color}` etc... 

### Champs par défaut

Il existe 2 champs par défaut que tous les blocks peuvent utiliser.

`container` Utilisé pour placer dans un container ou non (à vous de l'utiliser de cette manière)

```smarty
    <div class="{if $block.settings.default.container} container {/if}"> ... </div>
```

`bg_color` pour utiliser un `background-color` 
```smarty
    <div style="{if $block.settings.default.bg_color}background-color: {$block.settings.default.bg_color} {/if}"> ... </div>
```

### Champs répétables

Comme pour les champs de configuration, les champs répétables (`repeater`) sont également présents dans chaque block
Vous pouvez les utiliser avec cette variable: `{$block.states}`


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