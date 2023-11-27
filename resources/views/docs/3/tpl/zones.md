---
title: Zones
order: 2
---
# Zones
Tout comme les modules sont gréffés sur des hooks, les blocs seront placés sur des `Zones`

<div class="alert-warning " role="alert">
  Une **zone** peut également être un **hook**. 
En **greffant le module sur le hook** que vous souhaitez, ce dernier créera une zone qui aura le nom du hook. 
</div>

Plusieurs choix s'offrent à vous, le premier consiste à utiliser le widget du module: 

```smarty
{widget name="prettyblocks" zone_name="myCustomZone"}
```

Le second consiste à utiliser un hook personnalisé puis de greffer le module dessus:

```smarty
{hook h="myCustomHook" zone_name="myCustomZone"}
```

Le dernier, consiste à utiliser le helper `PrettyBlockZone`

```smarty
{prettyblocks_zone zone_name="myCustomZone"}

```

<div class="alert-warning " role="alert">
`{magic_zone}` est, depuis la version 1.1.0 dépréciée, veuillez utiliser `{prettyblocks_zone}`
</div>


