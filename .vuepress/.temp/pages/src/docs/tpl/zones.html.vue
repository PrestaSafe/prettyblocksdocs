<template><div><h1 id="zones" tabindex="-1"><a class="header-anchor" href="#zones" aria-hidden="true">#</a> Zones</h1>
<p>Tout comme les modules sont gréffés sur des hooks, les blocs seront placés sur des <code v-pre>Zones</code></p>
<div class="custom-container tip"><p class="custom-container-title">TIP</p>
<p>Une <strong>zone</strong> peut également être un <strong>hook</strong>.
En <strong>greffant le module sur le hook</strong> que vous souhaitez, ce dernier créera une zone qui aura le nom du hook.</p>
</div>
<h2 id="creer-une-zone" tabindex="-1"><a class="header-anchor" href="#creer-une-zone" aria-hidden="true">#</a> Créer une zone</h2>
<p>Plusieurs choix s'offrent à vous, le premier consiste à utilisez le widget du module:</p>
<p><code v-pre>{widget name=&quot;cz_builder&quot; zone_name=&quot;myCustomZone&quot;}</code></p>
<p>Le second consiste à utiliser un hook personnalisé puis de greffer le module dessus:</p>
<p><code v-pre>{hook h=&quot;myCustomHook&quot; zone_name=&quot;myCustomZone&quot;}</code></p>
<p>Le dernier, consiste à utiliser le helper <code v-pre>MagicZone</code></p>
<p><code v-pre>{magic_zone zone_name=&quot;myCustomZone&quot;}</code></p>
</div></template>


