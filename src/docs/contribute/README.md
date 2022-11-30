# Compiler PrettyBlocks

Si vous le souhaitez, vous pouvez nous aider à rendre l'expérience utilisateur encore plus enrichissante. 
Vous pouvez compiler et étendre les fonctionnalités de **PrettyBlocks** 

Ce dernier utilise les technologies suivantes: 

- Vue 3 
- Tailwind CSS
- ViteJS (bundler)

Rendez vous dans le dossier `_dev` du module **PrettyBlocks** 

puis installez les dépendences: 
`npm install`

Lancer ensuite le serveur de développement

`npm run dev`

Et enfin, pour utiliser le `HMR` (hot module reload)

Modifiez la vue: `modules/prettyblocks/views/templates/admin/index.html.twig`

et placez la variable `{% set vitedev = false %}`

à `true`

`{% set vitedev = true %}`

Si le serveur vous renvoi une autre adresse que  `http://localhost:3002`

Remplacer cette url dans les lignes suivantes par l'url de serveur de développement:
```twig
{% if vitedev %}
    <script type="module" src="http://localhost:3002/@vite/client"></script> 
   {% endif %}
  <div id="app"></div>
    {% if vitedev %}
      <script type="module" src="http://localhost:3002/src/main.js"></script>
    {% endif %}
```

Enfin, une fois vos modifications terminées lancez un:

`npm run build` 
puis repassez la variable `vitedev` à false `{% set vitedev = false %}`

Vous pouvez nous faire une pull request et nous serons ravi d'échanger à ce sujet :) 

