# Helper

Notre classe `HelperBuilder` vous permettra de gagner du temps dans vos développements: 

## HelperBuilder::pathFormattedFromString

Vous permet de retourner un chemin "formaté" en chemin absolue ex: 

`HelperBuilder::pathFormattedFromString('$/modules/prettyblocks/views/images/')` vous retournera: 
`/path/to/prestashop/modules/prettyblocks/views/images/`

## HelperBuilder::pathFormattedFromUrl

Vous permet de retourner un chemin absolue depuis une url ex: 

`HelperBuilder::pathFormattedFromUrl('https://your_shop.com/modules/prettyblocks/views/images/')`
vous retournera :
`/path/to/prestashop/modules/prettyblocks/views/images/`

## HelperBuilder::pathFormattedToUrl

Retourne un `path` en url ex:
`HelperBuilder::pathFormattedToUrl('$/modules/prettyblocks/views/images/')`
vous retournera :
`https://your_shop.com/modules/prettyblocks/views/images/`


## HelperBuilder::renderBlocks 

Retourne le rendu d'un ou plusieurs blocks (voir  [créer votre premier blocks](/docs/get-started/create-a-block.md))

```php
 return HelperBuilder::renderBlocks(
     [
         new MyCustomBlock($this)  
            // new MySecondCustomBlock($this)  
        ]
    );
```

## HelperBuilder::getRandomCategory
Retourne un tableau d'une catégorie aléatoire formatée pour des champs de type `selector`.
Très utile pour l'insertion de vos blocks qui ont des champs de catégories à remplir ex: 

```php
  'config' => [
      'fields' => [
          // ...
            'category' => [
                'type' => 'selector',
                'label' => $this->module->l('Category'),
                'collection' => 'Category',
                'force_default_value' => true,
                'default' => \HelperBuilder::getRandomCategory($this->context->language->id, $this->context->shop->id),
                'selector' => '{id} - {name}',
            ],
            // ... 
        ],
    ],
```
## HelperBuilder::getRandomProduct
idem que `getRandomCategory` afin d'avoir un produit de manière aléatoire

## HelperBuilder::getRandomCMS
idem que `getRandomCategory` afin d'avoir une page CMS de manière aléatoire