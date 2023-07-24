const { description } = require('../../package')
module.exports = {
  host: 'localhost',
  port: 8282,
  
  /**
   * Ref：https://v1.vuepress.vuejs.org/config/#title
   */
  title: 'PrettyBlocks - Page builder PrestaShop',
  /**
   * Ref：https://v1.vuepress.vuejs.org/config/#description
   */
  description: description,

  // Change base url for relative urls
  // base: "/",

  /**
   * Extra tags to be injected to the page HTML `<head>`
   *
   * ref：https://v1.vuepress.vuejs.org/config/#head
   */
  head: [
    ['meta', { name: 'theme-color', content: '#5530be' }],
    ['meta', { name: 'apple-mobile-web-app-capable', content: 'yes' }],
    ['meta', { name: 'apple-mobile-web-app-status-bar-style', content: 'black' }],
  ],

  /**
   * Theme configuration, here is the default theme configuration for VuePress.
   *
   * ref：https://v1.vuepress.vuejs.org/theme/default-theme-config.html
   */
  themeConfig: {
    repo: '',
    editLinks: false,
    docsDir: '',
    editLinkText: '',
    lastUpdated: false,
    nav: [
     
      {
        text: 'Get Started',
        link: '/docs/get-started/',
      },
      // {
      //   text: 'Comment ça marche',
      //   link: '/how-it-works/',
      // },
      {
        text: 'Hooks',
        link: '/docs/hooks/',
      },
      {
        text: 'Templating',
        link: '/docs/tpl/',
      },
      {
        text: 'Contribuer',
        link: '/docs/contribute/',
      },
      {
        text: 'GitHub',
        link: 'https://github.com/PrestaSafe/prettyblocks'
      },
      {
        text: 'PrestaSafe',
        link: 'https://www.prestasafe.com'
      },
    ],
    sidebar: {
      '/how-it-works': [
        {
          title: 'Installation',
        }
      ],
      '/docs/get-started/': [
        {
          title: 'Getting started',
          collapsable: true,
          sidebarDepth: 3,
          children: [
            '',
            'create-a-block',
            'fields-available',
            '/docs/hooks/',
            '/docs/helper/',
          ]
        }
      ],

      '/docs/hooks/' : [
        {
          title: 'Hooks',
          collapsable: true,
          children: [
            '',
            '/docs/tpl/',
            '/docs/helper/',
          ]
        }
      ],
      '/docs/tpl/' : [
        {
          title: 'Templating',
          collapsable: true,
          sidebarDepth: 3,
          children: [
            '',
            'zones',
            'settings'
          ]
        }
      ],
      '/docs/helper/' : [
        {
          title: 'Helper',
          collapsable: true,
          sidebarDepth: 3,
          children: [
            '',
          ]
        }
      ],
      '/docs/components/' : [
        {
          title: 'Components',
          collapsable: true,
          sidebarDepth: 3,
          children: [
            '',
          ]
        }
      ],
      '/docs/contribute/' : [
        {
          title: 'Contribuer',
          collapsable: true,
          sidebarDepth: 3,
          children: [
            '',
          ]
        }
      ]
    }
  },

  /**
   * Apply plugins，ref：https://v1.vuepress.vuejs.org/zh/plugin/
   */
  plugins: [
    '@vuepress/plugin-back-to-top',
    '@vuepress/plugin-medium-zoom',
  ]
}
