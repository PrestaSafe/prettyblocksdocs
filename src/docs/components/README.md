# Composants

Depuis la version 2.1.0, PrettyBlocks possède un composant qui vous permet de mieux éditer votre balisage Hn
afin de proposer une meilleure structure SEO à vos thèmes. 

## Utilisation 
Dans un premier temps, enregistrez un champs de type `title` dans votre block: [Champs title](/docs/get-started/fields-available.html#title)

Placez ensuite: 
`{prettyblocks_title block=$block field="title"}`

dans votre template. 

`$block` est le block parent (Obligatoire)
`field` nom du champs à éditer (champs de type title obligatoire)

Vous pourrez par la suite éditer votre balisage hn depuis PrettyBlocks: 
<br>
<img :src="$withBase('/title-component-prettyblocks.png')" alt="Composant title prettyblocks" width="auto">

Les choix suivants seront proposés: 
<ol>
    <li><strong>h1</strong></li>
    <li><strong>h2</strong></li>
    <li><strong>h3</strong></li>
    <li><strong>h4</strong></li>
    <li><strong>h5</strong></li>
    <li><strong>h6</strong></li>
    <li><strong>span</strong></li>
    <li><strong>p</strong></li>
</ol>