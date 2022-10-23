<template><div><h1 id="intro" tabindex="-1"><a class="header-anchor" href="#intro" aria-hidden="true">#</a> Intro</h1>
<p>Afin d'étendre au mieux les fonctionnalités de PrettyBlocks, nous avons implémentés
certains hooks.</p>
<h2 id="register-hooks-actionregisterblock" tabindex="-1"><a class="header-anchor" href="#register-hooks-actionregisterblock" aria-hidden="true">#</a> Register Hooks (ActionRegisterBlock)</h2>
<p>En greffant votre module sur le hook <strong>ActionRegisterBlock</strong> vous pourrez simplement rajouter vos blocs.</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">hookActionRegisterBlock</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
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
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><h2 id="register-settings-actionregisterthemesettings" tabindex="-1"><a class="header-anchor" href="#register-settings-actionregisterthemesettings" aria-hidden="true">#</a> Register Settings (ActionRegisterThemeSettings)</h2>
<p>Le hook <strong>ActionRegisterThemeSettings</strong> vous permettra d'enregistrer des paramètres généraux pour votre thème.
Pour enregistrer des paramètres, vous devez retourner un tableau de <a href="/get-started/fields-available">Champs</a>
Seul le paramètre <code style="color:red">tab</code> vous permettra d'ajouter votre paramètres dans un tab existant, ou de le créer si il n'existe pas.
ex: <code v-pre>'tab' =&gt; 'design'</code> placera le paramètre dans un onglet <code v-pre>Design</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">hookActionRegisterThemeSettings</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    <span class="token keyword">return</span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'settings_name'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'design'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'color'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'#000000'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Change your color'</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'select'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'TEST'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'select'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Select field'</span><span class="token punctuation">,</span> 
            <span class="token comment">// 'default' => '2',</span>
            <span class="token string single-quoted-string">'choices'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                <span class="token string single-quoted-string">'1'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Value 1'</span><span class="token punctuation">,</span>
                <span class="token string single-quoted-string">'2'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Value 2'</span><span class="token punctuation">,</span>
                <span class="token string single-quoted-string">'3'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Value 3'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'radio_group'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'TEST'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'radio_group'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Choose a value'</span><span class="token punctuation">,</span> 
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'3'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'choices'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                <span class="token string single-quoted-string">'1'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 1'</span><span class="token punctuation">,</span>
                <span class="token string single-quoted-string">'2'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 2'</span><span class="token punctuation">,</span>
                <span class="token string single-quoted-string">'3'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Radio 3'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'settings_name_radio'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'design'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'radio'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token constant boolean">false</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Add this option'</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'settings_name_textarea'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Custom tabs !'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'textarea'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Hello you !'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'type textarea'</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'new_logo'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
            <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'design'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'fileupload'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'File upload'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'path'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'$/fakemodule/views/images/test/'</span><span class="token punctuation">,</span>
            <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                <span class="token string single-quoted-string">'imgs'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
                    <span class="token punctuation">[</span><span class="token string single-quoted-string">'url'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'https://via.placeholder.com/141x180'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
                <span class="token punctuation">]</span>
            <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span>
    <span class="token punctuation">]</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><h2 id="extend-block-beforerendering-blockcode" tabindex="-1"><a class="header-anchor" href="#extend-block-beforerendering-blockcode" aria-hidden="true">#</a> Extend block (beforeRendering{BlockCode})</h2>
<p>Afin d'étendre les données de votre block, vous pouvez rajouter des données via ce hook:
Exemple pour un block aillant pour code: <code v-pre>block_category_products</code>
un hook est exécuté avec le code du bloc en camelCase:  <code v-pre>hookbeforeRenderingblockCategoryProducts</code></p>
<p>Vous pouvez utiliser toutes les données de votre bloc dans le <code v-pre>$params['block']</code></p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">hookbeforeRenderingblockCategoryProducts</span><span class="token punctuation">(</span><span class="token variable">$params</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    <span class="token variable">$settings</span> <span class="token operator">=</span> <span class="token variable">$params</span><span class="token punctuation">[</span><span class="token string single-quoted-string">'block'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string single-quoted-string">'settings'</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
    <span class="token keyword">if</span><span class="token punctuation">(</span><span class="token variable">$settings</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">if</span><span class="token punctuation">(</span><span class="token operator">!</span><span class="token keyword">isset</span><span class="token punctuation">(</span><span class="token variable">$settings</span><span class="token punctuation">[</span><span class="token string single-quoted-string">'category'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string single-quoted-string">'id'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">)</span>
        <span class="token punctuation">{</span>
            <span class="token keyword">return</span> <span class="token constant boolean">false</span><span class="token punctuation">;</span> 
        <span class="token punctuation">}</span>
        <span class="token variable">$id_category</span> <span class="token operator">=</span> <span class="token punctuation">(</span><span class="token keyword type-casting">int</span><span class="token punctuation">)</span><span class="token variable">$settings</span><span class="token punctuation">[</span><span class="token string single-quoted-string">'category'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string single-quoted-string">'id'</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
        
        <span class="token comment">// $block.extra.products </span>
        <span class="token keyword">return</span> <span class="token punctuation">[</span><span class="token string single-quoted-string">'products'</span> <span class="token operator">=></span> <span class="token variable">$this</span><span class="token operator">-></span><span class="token function">getProducts</span><span class="token punctuation">(</span><span class="token variable">$id_category</span><span class="token punctuation">)</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
    <span class="token keyword">return</span> <span class="token constant boolean">false</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>

</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><p>Toutes les clés retournés pourront être utilisé dans la variable <code v-pre>$block.extra</code> sur le front office.
Résulat de notre exemple: <code v-pre>$block.extra.products</code> retournera un tableau de produits.</p>
<h2 id="extends-templates-actionextendblocktemplate-blockcode" tabindex="-1"><a class="header-anchor" href="#extends-templates-actionextendblocktemplate-blockcode" aria-hidden="true">#</a> Extends Templates (actionExtendBlockTemplate{BlockCode})</h2>
<p>Pourquoi devoir refaire un bloc ou un module afin de modifier un simple affichage ?
Un module peut rajouter un ou plusieurs templates en fonction d'un bloc.</p>
<p>Comme pour l'exemple précédent, pour un bloc aillant le code <code v-pre>block_category_products</code>
vous pouvez rajouter un ou plusieurs templates pour ce dernier:</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code> <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">hookactionExtendBlockTemplateBlockCategoryProducts</span><span class="token punctuation">(</span><span class="token variable">$params</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    <span class="token keyword">return</span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'override1'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'module:'</span><span class="token operator">.</span><span class="token variable">$this</span><span class="token operator">-></span><span class="token property">name</span><span class="token operator">.</span><span class="token string single-quoted-string">'/views/templates/blocks/template1.tpl'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'override2'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'module:'</span><span class="token operator">.</span><span class="token variable">$this</span><span class="token operator">-></span><span class="token property">name</span><span class="token operator">.</span><span class="token string single-quoted-string">'/views/templates/blocks/template2.tpl'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div></div></template>


