# Zones
Tout comme les modules sont gréffés sur des hooks, les blocs seront placés sur des `Zones`
::: tip
Une **zone** peut également être un **hook**. 
En **greffant le module sur le hook** que vous souhaitez, ce dernier créera une zone qui aura le nom du hook. 
:::

## Créer une zone

Plusieurs choix s'offrent à vous, le premier consiste à utilisez le widget du module: 

`{widget name="cz_builder" zone_name="myCustomZone"}`

Le second consiste à utiliser un hook personnalisé puis de greffer le module dessus:

`{hook h="myCustomHook" zone_name="myCustomZone"}`

Le dernier, consiste à utiliser le helper `MagicZone`

`{magic_zone zone_name="myCustomZone"}`




