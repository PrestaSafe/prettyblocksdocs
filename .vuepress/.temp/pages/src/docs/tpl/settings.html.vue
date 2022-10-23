<template><div><h1 id="settings" tabindex="-1"><a class="header-anchor" href="#settings" aria-hidden="true">#</a> Settings</h1>
<div class="custom-container tip"><p class="custom-container-title">TIP</p>
<p>Tous les paramètres que vous avez enregistré dans votre thème peuvent être récupérés
avec notre helper front</p>
</div>
<h2 id="helper" tabindex="-1"><a class="header-anchor" href="#helper" aria-hidden="true">#</a> Helper</h2>
<p>En PHP:</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token class-name static-context">TplSettings</span><span class="token operator">::</span><span class="token function">getSettings</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'radio_group'</span><span class="token punctuation">)</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><p>via smarty</p>
<div class="language-smarty ext-smarty line-numbers-mode"><pre v-pre class="language-smarty"><code><span class="token smarty language-smarty"><span class="token delimiter punctuation">{</span><span class="token keyword">TplSettings</span><span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">getSettings</span><span class="token punctuation">(</span><span class="token string">'radio_group'</span><span class="token punctuation">)</span><span class="token delimiter punctuation">}</span></span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div></div></div><p>Ces informations vous donnerons accès aux valeurs des champs de type settings.</p>
<div class="language-php ext-php line-numbers-mode"><pre v-pre class="language-php"><code><span class="token keyword">return</span> <span class="token punctuation">[</span>
    <span class="token string single-quoted-string">'settings_name'</span> <span class="token operator">=></span> <span class="token punctuation">[</span>
        <span class="token string single-quoted-string">'tab'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'design'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'type'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'color'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'default'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'#000000'</span><span class="token punctuation">,</span>
        <span class="token string single-quoted-string">'label'</span> <span class="token operator">=></span> <span class="token string single-quoted-string">'Change your color'</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    <span class="token comment">// ...</span>
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
<span class="token punctuation">]</span>
</code></pre><div class="line-numbers" aria-hidden="true"><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div><div class="line-number"></div></div></div><p>Exemple: <code v-pre>{TplSettings::getSettings('radio_group')}</code> retournera <code v-pre>Radio 3</code> ou <code v-pre>Radio 1</code> si l'utlisateur à choisi la valeur <code v-pre>1</code></p>
<p><code v-pre>{TplSettings::getSettings('settings_name')}</code> retournera <code v-pre>#000000</code> ou la valeur définir par l'utlisateur.</p>
</div></template>


