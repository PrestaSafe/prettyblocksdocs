<template><div><h1 id="champs-disponibles" tabindex="-1"><a class="header-anchor" href="#champs-disponibles" aria-hidden="true">#</a> Champs disponibles</h1>
<p>Que ce soit dans la section <code v-pre>config</code> ou  <code v-pre>repeater</code>
les champs utilisés restent les mêmes.
Voici un exemple d'utilisation</p>
<h2 id="text" tabindex="-1"><a class="header-anchor" href="#text" aria-hidden="true">#</a> Text</h2>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'title'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'text'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Title'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Customer reviews'</span> <span class="token comment">// default value </span>
<span class="token punctuation">]</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>String</code>)</td>
</tr>
</tbody>
</table>
<h2 id="color" tabindex="-1"><a class="header-anchor" href="#color" aria-hidden="true">#</a> Color</h2>
<p>Afficher un colorpicker avec choix de couleur et / ou un champs pour mettre une couleur custom.</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'color'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'color'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Background color'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'#121212'</span> <span class="token comment">// default value </span>
<span class="token punctuation">]</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>String</code> (color en héxadecimal))</td>
</tr>
</tbody>
</table>
<h2 id="textarea" tabindex="-1"><a class="header-anchor" href="#textarea" aria-hidden="true">#</a> Textarea</h2>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'description'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'textarea'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Title'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Customer reviews'</span> <span class="token comment">// default value </span>
<span class="token punctuation">]</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>String</code>)</td>
</tr>
</tbody>
</table>
<h2 id="fileupload" tabindex="-1"><a class="header-anchor" href="#fileupload" aria-hidden="true">#</a> Fileupload</h2>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'upload'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'fileupload'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'File upload'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'path'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'$/cz_gallery/imgs/'</span><span class="token punctuation">,</span> <span class="token comment">// path to upload</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token punctuation">[</span> <span class="token comment">// default value</span>
        <span class="token string single-quoted-string">'imgs'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token punctuation">[</span><span class="token string single-quoted-string">'url'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'https://via.placeholder.com/100x100'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">]</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">path</code></td>
<td>Chemin d'upload du fichier, <strong>Doit absolument commencer par <code v-pre>$</code></strong> <br> <code v-pre>$</code> équivaut à <code v-pre>_PS_ROOT_DIR_</code> <br> pour un chemin custom d'un module: <code v-pre>$/module_name/views/images/</code></td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Image par défaut (type: <code v-pre>Array</code>)</td>
</tr>
</tbody>
</table>
<h2 id="selector" tabindex="-1"><a class="header-anchor" href="#selector" aria-hidden="true">#</a> Selector</h2>
<p><code v-pre>Selector</code> Vous permettra de créer un champs de recherche en fonction d'une <code v-pre>PrestaShopCollection</code> ou <code v-pre>ObjectModel</code></p>
<p>Return <code v-pre>ObjectPresenter</code></p>
<p>Exemple pour rechercher un produit:</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'product'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'selector'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Choose a product'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'collection'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Product'</span><span class="token punctuation">,</span> <span class="token comment">// Collection to cearch</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'default value'</span><span class="token punctuation">,</span> <span class="token comment">// default value</span>
    <span class="token string single-quoted-string">'selector'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'{id} - {name}'</span> <span class="token comment">// will be replaced by Object Attribute and will be used for search results</span>
<span class="token punctuation">]</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">collection</code></td>
<td><code v-pre>PrestaShopCollection</code> ou <code v-pre>ObjectModel</code>  <br>ex: <code v-pre>Product</code> / <code v-pre>Category</code> /  <code v-pre>CMS</code> (fonctionne avec tous les objects model)</td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>value par defaut (type: <code v-pre>Array</code>)</td>
</tr>
</tbody>
</table>
<h2 id="editor" tabindex="-1"><a class="header-anchor" href="#editor" aria-hidden="true">#</a> Editor</h2>
<p><code v-pre>Editor</code> Vous permettra de créer un champs de type <code v-pre>TinyMce</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'text'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'editor'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Editor'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'&lt;p>Hello &lt;strong>World&lt;/strong> !'</span> <span class="token comment">// default HTML value</span>
<span class="token punctuation">]</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>String</code>)</td>
</tr>
</tbody>
</table>
<h2 id="checkbox" tabindex="-1"><a class="header-anchor" href="#checkbox" aria-hidden="true">#</a> Checkbox</h2>
<p><code v-pre>checkbox</code> Vous permettra de créer un champs de type <code v-pre>&lt;input type='checkbox'&gt;</code>
Idéal pour certaines configurations.</p>
<p>Return <code v-pre>Bool</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'show'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'checkbox'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Use custom image'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token constant boolean">false</span> <span class="token comment">// default value (Boolean)</span>
<span class="token punctuation">]</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>Boolean</code>) <p> Default: <code v-pre>false</code></p></td>
</tr>
</tbody>
</table>
<h2 id="radio-group" tabindex="-1"><a class="header-anchor" href="#radio-group" aria-hidden="true">#</a> Radio Group</h2>
<p><code v-pre>radio_group</code> Vous permettra de créer un choix sous forme de  <code v-pre>&lt;input type='radio'&gt;</code></p>
<p>Return <code v-pre>String</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'radio_group'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'radio_group'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Choose a value'</span><span class="token punctuation">,</span>  <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'3'</span><span class="token punctuation">,</span> <span class="token comment">// default value (String)</span>
    <span class="token string single-quoted-string">'choices'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'1'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 1'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'2'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 2'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'3'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 3'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">choices</code></td>
<td>Option possibles format: <code v-pre>['id' =&gt; 'value']</code></td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>String</code>)</td>
</tr>
</tbody>
</table>
<h2 id="select" tabindex="-1"><a class="header-anchor" href="#select" aria-hidden="true">#</a> Select</h2>
<p><code v-pre>select</code> Vous permettra de créer un choix sous forme de  <code v-pre>&lt;select&gt;&lt;/select&gt;</code></p>
<p>Return <code v-pre>String</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token string single-quoted-string">'choices'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'select'</span><span class="token punctuation">,</span> <span class="token comment">// type of field</span>
    <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Choose a value'</span><span class="token punctuation">,</span> <span class="token comment">// label to display</span>
    <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'3'</span><span class="token punctuation">,</span> <span class="token comment">// default value (String)</span>
    <span class="token string single-quoted-string">'choices'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'1'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 1'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'2'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 2'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'3'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 3'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><table>
<thead>
<tr>
<th>Options</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code style="color:red">type</code></td>
<td>Type du champs <code v-pre>text</code> / <code v-pre>color</code> / <code v-pre>textarea</code> / <code v-pre>fileupload</code> / <code v-pre>selector</code> / <code v-pre>editor</code> / <code v-pre>checkbox</code> / <code v-pre>radio_group</code> / <code v-pre>select</code></td>
</tr>
<tr>
<td><code style="color:red">label</code></td>
<td>Label à afficher</td>
</tr>
<tr>
<td><code style="color:red">choices</code></td>
<td>Option possibles format: <code v-pre>['id' =&gt; 'value']</code></td>
</tr>
<tr>
<td><code style="color:red">default</code></td>
<td>Valeur par défault (type: <code v-pre>String</code>)</td>
</tr>
</tbody>
</table>
</div></template>


