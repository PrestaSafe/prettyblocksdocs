<template><div><h1 id="donnees" tabindex="-1"><a class="header-anchor" href="#donnees" aria-hidden="true">#</a> Données</h1>
<p>Les templates utilisés sont des template utilisant le moteur de template principale de PrestaShop: <code v-pre>Smarty</code></p>
<p>Chaque templates doivent être enregistrés en utilisant la nouvelle syntaxe de PrestaShop:</p>
<p>Exemple: <code v-pre>module:modulemodule/views/templates/hook/front.tpl</code></p>
<div class="custom-container tip"><p class="custom-container-title">TIP</p>
<p><strong>TOUS les templates peuvent être overridés par un theme parent ou enfant.</strong></p>
</div>
<p>Ex: pour un template localisé dans: <code v-pre>/modules/modulemodule/views/templates/hook/front.tpl</code>
utlisant la syntaxe: <code v-pre>module:modulemodule/views/templates/hook/front.tpl</code></p>
<p>Ce dernier peut être surclassé en le plaçant dans un thème:
<code v-pre>/themes/montheme/modules/modulemodule/views/templates/hook/front.tpl</code></p>
<h2 id="utiliser-les-donnees-du-bloc" tabindex="-1"><a class="header-anchor" href="#utiliser-les-donnees-du-bloc" aria-hidden="true">#</a> Utiliser les données du bloc</h2>
<p>PrettyBloc renvoi dans chaque blocs, un variable nommée: <code v-pre>$block</code></p>
<h3 id="configuration" tabindex="-1"><a class="header-anchor" href="#configuration" aria-hidden="true">#</a> Configuration</h3>
<p>Toutes les données définies dans la section <code v-pre>config</code> peuvent être exploitées sous cette forme:</p>
<p><code v-pre>{$block.settings.{$nom_de_la_cle}}</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token comment">// exemple</span>
<span class="token string single-quoted-string">'config'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'fields'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'title'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'text'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Title'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Customer reviews'</span> <span class="token comment">// default value </span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'color'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'color'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Choose à background color'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'#121212'</span> <span class="token comment">// default value </span>
        <span class="token punctuation">]</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><p>Pour récupérer <code v-pre>title</code> placez dans vos templates: <code v-pre>{$block.settings.title}</code></p>
<p>Pour <code v-pre>color</code> =&gt; <code v-pre>{$block.settings.color}</code> etc...</p>
<h3 id="champs-repetables" tabindex="-1"><a class="header-anchor" href="#champs-repetables" aria-hidden="true">#</a> Champs répétables</h3>
<p>Comme pour les champs de configuration, les champs répétables (<code v-pre>repeater</code>) sont également présents dans chaque blocs
Vous pouvez les utilisez avec cette variable: <code v-pre>{$block.states}</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token comment">// exemple</span>
<span class="token string single-quoted-string">'repeater'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'name'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Element repeated'</span><span class="token punctuation">,</span>
    <span class="token string single-quoted-string">'nameFrom'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'title'</span><span class="token punctuation">,</span>
    <span class="token string single-quoted-string">'groups'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'title'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'text'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Title'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Customer reviews'</span> <span class="token comment">// default value </span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'color'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'color'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Choose à background color'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'#121212'</span> <span class="token comment">// default value </span>
        <span class="token punctuation">]</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">]</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><p>Exemple pour utiliser les éléments répétables dans ses templates.</p>
<div class="language-smarty ext-smarty line-numbers-mode"><pre v-pre class="language-smarty"><code>    <span class="token smarty language-smarty"><span class="token delimiter punctuation">{</span><span class="token keyword">foreach</span> <span class="token attr-name">from</span><span class="token operator">=</span><span class="token variable">$block</span><span class="token punctuation">.</span><span class="token variable">states</span> <span class="token attr-name">item</span><span class="token operator">=</span><span class="token variable">$state</span><span class="token delimiter punctuation">}</span></span>
        <span class="token smarty language-smarty"><span class="token delimiter punctuation">{</span><span class="token variable">$state</span><span class="token punctuation">.</span><span class="token variable">title</span><span class="token delimiter punctuation">}</span></span>
        <span class="token smarty language-smarty"><span class="token delimiter punctuation">{</span><span class="token variable">$state</span><span class="token punctuation">.</span><span class="token variable">color</span><span class="token delimiter punctuation">}</span></span>
    <span class="token smarty language-smarty"><span class="token delimiter punctuation">{/</span><span class="token keyword">foreach</span><span class="token delimiter punctuation">}</span></span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div></div></template>


