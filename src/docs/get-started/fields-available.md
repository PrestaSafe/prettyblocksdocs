# Champs disponibles

Que ce soit dans la section `config` ou  `repeater` 
les champs utilisés restent les mêmes. 
Voici un exemple d'utilisation

## Text
```php create-a-block
'title' => [
    'type' => 'text', // type of field
    'label' => 'Title', // label to display
    'default' => 'Customer reviews' // default value 
]
```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >default</code>  | Valeur par défault (type: `String`) |

## Color
Afficher un colorpicker avec choix de couleur et / ou un champs pour mettre une couleur custom.
```php 
'color' => [
    'type' => 'color', // type of field
    'label' => 'Background color', // label to display
    'default' => '#121212' // default value 
]
```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >default</code>  | Valeur par défault (type: `String` (color en héxadecimal)) |


## Textarea
```php 
'description' => [
    'type' => 'textarea', // type of field
    'label' => 'Title', // label to display
    'default' => 'Customer reviews' // default value 
]
```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >default</code>  | Valeur par défault (type: `String`) |

## Fileupload
```php 
'upload' => [
    'type' => 'fileupload', // type of field
    'label' => 'File upload', // label to display
    'path' => '$/cz_gallery/imgs/', // path to upload
    'default' => [ // default value
        'imgs' => [
            ['url' => 'https://via.placeholder.com/100x100'],
        ]
    ],
]
```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >path</code>  | Chemin d'upload du fichier, **Doigt absolument commencer par `$`** <br> `$` équivaut à `_PS_ROOT_DIR_` <br> pour un chemin custom d'un module: `$/module_name/views/images/`   |
| <code >default</code>  | Image par défaut (type: `Array`)  |

## Selector
`Selector` Vous permettra de créer un champs de recherche en fonction d'une `PrestaShopCollection` ou `ObjectModel`

Return `ObjectPresenter`

Exemple pour rechercher un produit: 
```php 
'product' => [
    'type' => 'selector', // type of field
    'label' => 'Choose a product', // label to display
    'collection' => 'Product', // Collection to cearch
    'default' => 'default value', // default value
    'selector' => '{id} - {name}' // will be replaced by Object Attribute and will be used for search results
]

```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >collection</code>  | `PrestaShopCollection` ou `ObjectModel`  <br>ex: `Product` / `Category` /  `CMS` (fonctionne avec tous les objects model)   |
| <code >default</code>  | value par defaut (type: `Array`)  |

## Editor
`Editor` Vous permettra de créer un champs de type `TinyMce`
```php 
'text' => [
    'type' => 'editor', // type of field
    'label' => 'Editor', // label to display
    'default' => '<p>Hello <strong>World</strong> !' // default HTML value
]

```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >default</code>  | Valeur par défault (type: `String`) |

## Checkbox
`checkbox` Vous permettra de créer un champs de type `<input type='checkbox'>`
Idéal pour certaines configurations. 

Return `Bool`

```php 
'show' => [
    'type' => 'checkbox', // type of field
    'label' => 'Use custom image', // label to display
    'default' => false // default value (Boolean)
]

```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select`   | 
| <code >label</code>  | Label à afficher |
| <code >default</code>  | Valeur par défault (type: `Boolean`) <p> Default: `false`</p> |

## Radio Group
`radio_group` Vous permettra de créer un choix sous forme de  `<input type='radio'>`

Return `String`

```php 
'radio_group' => [
    'type' => 'radio_group', // type of field
    'label' => 'Choose a value',  // label to display
    'default' => '3', // default value (String)
    'choices' => [
        '1' => 'Radio 1',
        '2' => 'Radio 2',
        '3' => 'Radio 3',
    ]
],

```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >choices</code>  | Option possibles format: `['id' => 'value']` |
| <code >default</code>  | Valeur par défault (type: `String`) |


## Select
`select` Vous permettra de créer un choix sous forme de  `<select></select>`

Return `String`

```php 
'choices' => [
    'type' => 'select', // type of field
    'label' => 'Choose a value', // label to display
    'default' => '3', // default value (String)
    'choices' => [
        '1' => 'Radio 1',
        '2' => 'Radio 2',
        '3' => 'Radio 3',
    ]
],

```

| Options            | Description  |                               
| -----------       | -----------  |                                
| <code >type</code>  | Type du champs `text` / `color` / `textarea` / `fileupload` / `selector` / `editor` / `checkbox` / `radio_group` / `select` | 
| <code >label</code>  | Label à afficher |
| <code >choices</code>  | Option possibles format: `['id' => 'value']` |
| <code >default</code>  | Valeur par défault (type: `String`) |
