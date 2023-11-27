---
title: Custom page
order: 1
---

# Custom page

PrettyBlocks peut être utilisé n'importe où sur votre thème. 
Si vous souhaitez avoir des page CMS avec des blocks custom c'est possible ! 

Exemple dans votre fichier: `/themes/classic/templates/cms/page.tpl`

Ajoutez:  

```smarty
{block name='cms_content'}
    {$cms.content nofilter}
    {prettyblocks_zone zone_name="cms|{$cms.id}"}
{/block}
```

Rendez vous ensuite sur une page CMS depuis PrettyBlocks et vous pourrez apercevoir dans la liste des zones
que votre zone `cms|{id_cms}` est bien présente. 

Cette astuce fonctionne pour toutes les pages. 


<img src="{{ asset('img/custom_zone_prettyblocks.png') }}" alt="custom zone prettyblocks">
