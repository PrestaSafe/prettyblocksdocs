<template><div><h1 id="creer-votre-premier-block" tabindex="-1"><a class="header-anchor" href="#creer-votre-premier-block" aria-hidden="true">#</a> Creer votre premier block</h1>
<h2 id="concept" tabindex="-1"><a class="header-anchor" href="#concept" aria-hidden="true">#</a> Concept</h2>
<p>Un module peut créer <strong>plusieurs blocs</strong>
Tout au long de cette documentation, nous reprendons un module essentiel: <strong>Le module de produits phares</strong>
Afin de pouvoir utiliser ce module à plusieurs endroits.</p>
<h3 id="module" tabindex="-1"><a class="header-anchor" href="#module" aria-hidden="true">#</a> Module</h3>
<p>Voici une structure classic d'un module.</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token php language-php"><span class="token delimiter important">&lt;?php</span> 

<span class="token keyword">use</span> <span class="token package">PrestaShop<span class="token punctuation">\</span>PrestaShop<span class="token punctuation">\</span>Core<span class="token punctuation">\</span>Module<span class="token punctuation">\</span>WidgetInterface</span><span class="token punctuation">;</span>
<span class="token keyword">class</span> <span class="token class-name-definition class-name">FakeModule</span> <span class="token keyword">extends</span> <span class="token class-name">Module</span> <span class="token keyword">implements</span> <span class="token class-name">WidgetInterface</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__construct</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">name</span> <span class="token operator">=</span> <span class="token string single-quoted-string">'fakemodule'</span><span class="token punctuation">;</span>
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">tab</span> <span class="token operator">=</span> <span class="token string single-quoted-string">'administration'</span><span class="token punctuation">;</span>
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">version</span> <span class="token operator">=</span> <span class="token string single-quoted-string">'1.0.0'</span><span class="token punctuation">;</span>
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">author</span> <span class="token operator">=</span> <span class="token string single-quoted-string">'PrestaSafe'</span><span class="token punctuation">;</span>
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">need_instance</span> <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>

        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">bootstrap</span> <span class="token operator">=</span> <span class="token constant boolean">true</span><span class="token punctuation">;</span>
        <span class="token keyword static-context">parent</span><span class="token operator">::</span><span class="token function">__construct</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">displayName</span> <span class="token operator">=</span> <span class="token variable">$this</span><span class="token operator">-></span><span class="token function">l</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'Fake module'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">description</span> <span class="token operator">=</span> <span class="token variable">$this</span><span class="token operator">-></span><span class="token function">l</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'Fake module'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        
        <span class="token variable">$this</span><span class="token operator">-></span><span class="token property">ps_versions_compliancy</span> <span class="token operator">=</span> <span class="token keyword">array</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'min'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'1.7'</span><span class="token punctuation">,</span> <span class="token string single-quoted-string">'max'</span> <span class="token operator">=></span> <span class="token constant">_PS_VERSION_</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">install</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token keyword static-context">parent</span><span class="token operator">::</span><span class="token function">install</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">&amp;&amp;</span> <span class="token variable">$this</span><span class="token operator">-></span><span class="token function">registerHook</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'ActionRegisterBlock'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">uninstall</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token keyword static-context">parent</span><span class="token operator">::</span><span class="token function">uninstall</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">&amp;&amp;</span> <span class="token variable">$this</span><span class="token operator">-></span><span class="token function">unregisterHook</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'ActionRegisterBlock'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
    
    <span class="token comment">// Register blocks here.</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">hookActionRegisterBlock</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$blocks</span> <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
        <span class="token variable">$blocks</span><span class="token punctuation">[</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'name'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Fake block'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'description'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Description of your block'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'code'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'fake_block'</span><span class="token punctuation">,</span> <span class="token comment">// required must be uniq</span>
            <span class="token string single-quoted-string">'icon'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'StarIcon'</span><span class="token punctuation">,</span> <span class="token comment">// https://heroicons.com V2</span>
            <span class="token string single-quoted-string">'need_reload'</span> <span class="token operator">=></span> <span class="token constant boolean">true</span><span class="token punctuation">,</span> <span class="token comment">// reload iframe after save</span>
            <span class="token string single-quoted-string">'templates'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span>  <span class="token string single-quoted-string">'module:'</span><span class="token operator">.</span><span class="token variable">$this</span><span class="token operator">-></span><span class="token property">name</span><span class="token operator">.</span><span class="token string single-quoted-string">'/views/templates/block/default.tpl'</span>
            <span class="token punctuation">]</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'config'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                <span class="token string single-quoted-string">'fields'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                    <span class="token comment">// ... array of fields</span>
                <span class="token punctuation">]</span>
            <span class="token punctuation">]</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'repeater'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                <span class="token string single-quoted-string">'name'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Element repeated'</span><span class="token punctuation">,</span>
                <span class="token string single-quoted-string">'nameFrom'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'field name'</span><span class="token punctuation">,</span>
                <span class="token string single-quoted-string">'groups'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                    <span class="token comment">// ... array of fields</span>
                <span class="token punctuation">]</span>
            <span class="token punctuation">]</span>

        <span class="token punctuation">]</span>

        <span class="token keyword">return</span> <span class="token variable">$blocks</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

<span class="token punctuation">}</span>

</span></code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><p>Le hook <strong>ActionRegisterBlock</strong> est prévu pour enregistrer un block dans le builder.</p>
<h2 id="details-d-un-bloc" tabindex="-1"><a class="header-anchor" href="#details-d-un-bloc" aria-hidden="true">#</a> Détails d'un bloc</h2>
<table>
<thead>
<tr>
<th>Champs</th>
<th>Description</th>
<th>Type</th>
<th>Required</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">name</code></td>
<td>Nom d'affichage de votre bloc</td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">true</code></td>
</tr>
<tr>
<td><code style="color:red">description</code></td>
<td>Description de votre bloc</td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">true</code></td>
</tr>
<tr>
<td><code style="color:red">code</code></td>
<td>Description de votre bloc <strong>doit absolument être unique</strong></td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">true</code></td>
</tr>
<tr>
<td><code style="color:red">icon</code></td>
<td>Icon heroicons (v2) en format camelCase <br>ex: <code v-pre>academic-cap</code> =&gt; <code v-pre>AcademicCapIcon</code></td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">false</code></td>
</tr>
<tr>
<td><code style="color:red">need_reload</code></td>
<td>Rechargement de l'iframe après avoir sauvegardé un bloc, utile si vous développer un block de type slider par exemple <br> Default: <code v-pre>true</code></td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">false</code></td>
</tr>
<tr>
<td><code style="color:red">templates</code></td>
<td>Templates de votre blocs, <strong>il est impératif d'avoir un template avec la clé <code v-pre>default</code></strong> <br> Vous pouvez enregistrer autant de templates que vous souhaitez</td>
<td><code style="color:green">Array</code></td>
<td><code style="color:red">true</code></td>
</tr>
<tr>
<td><code style="color:red">config</code></td>
<td>Champs de configuration de votre bloc <br> <strong>Doit avoir un tableau de champs <br><code v-pre>'fields' =&gt; [ /*... fields ...*/ ]</code></strong> <br> voir <a href="#champs-disponibles">Champs disponibles</a></td>
<td><code style="color:green">Array</code></td>
<td><code style="color:red">false</code></td>
</tr>
<tr>
<td><code style="color:red">repeater</code></td>
<td>Champs répétables <br> Plus de détails <a href="#champs-repetables">Champs répétable</a></td>
<td><code style="color:green">Array</code></td>
<td><code style="color:red">false</code></td>
</tr>
</tbody>
</table>
<h2 id="champs-repetables" tabindex="-1"><a class="header-anchor" href="#champs-repetables" aria-hidden="true">#</a> Champs répétables</h2>
<p>Les champs répétables vous permettront de mettre autant de données que l'utilisateur le souhaite.
Plusieurs paramètres sont requis.</p>
<table>
<thead>
<tr>
<th>Champs</th>
<th>Description</th>
<th>Type</th>
<th>Required</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">name</code></td>
<td>Noms par défaut des elements listés</td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">true</code></td>
</tr>
<tr>
<td><code style="color:red">nameFrom</code></td>
<td>Prends le nom de la valeur du champs répété <br> ex: <code v-pre>'nameFrom' =&gt; 'title'</code> affichera la valeur du champs title dans la liste</td>
<td><code style="color:green">String</code></td>
<td><code style="color:red">false</code></td>
</tr>
<tr>
<td><code style="color:red">repeater</code></td>
<td>Liste des champs <br> voir <a href="#champs-disponibles">Champs disponibles</a></td>
<td><code style="color:green">Array</code></td>
<td><code style="color:red">false</code></td>
</tr>
</tbody>
</table>
</div></template>


