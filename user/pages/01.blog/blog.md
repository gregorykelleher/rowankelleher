---
title: Blog
blog_url: blog
body_classes: header-image fullwidth

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 15
    pagination: true

feed:
    description: My personal Blog
    limit: 15

pagination: true
---
