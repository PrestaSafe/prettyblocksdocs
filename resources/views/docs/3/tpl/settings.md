---
title: Settings
order: 3
---
# Settings



<div class="alert-warning " role="alert">
  **Tous les paramètres que vous avez enregistrés dans votre thème peuvent être récupérés
avec notre helper front** 
</div>


## Helper

En PHP:

```php 
TplSettings::getSettings('radio_group')
```

via smarty 

```smarty 
{TplSettings::getSettings('radio_group')}
```

Ces informations vous donneront accès aux valeurs des champs de type settings. 

```php
return [
    'settings_name' => [
        'tab' => 'design',
        'type' => 'color',
        'default' => '#000000',
        'label' => 'Change your color'
    ],
    // ...
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
]
```

Exemple: `{TplSettings::getSettings('radio_group')}` retournera `Radio 3` ou `Radio 1` si l'utlisateur a choisi la valeur `1`

`{TplSettings::getSettings('settings_name')}` retournera `#000000` ou la valeur définie par l'utlisateur. 
