# shaarli-favicons
Shaarli plugin to add favicon/filetype icons to links.

## Installation
The plugin's folder (`favicons`) should be placed in the `<shaarli>/plugins/` directory.

The directory structure should look like:

```bash 
└── plugins
    └── favicons
        ├── favicons.css
        ├── favicons.js
        ├── favicons.meta
        ├── favicons.php
        └── jquery-3.3.1.slim.min.js
```

To enable the plugin, just check it in the Plugin Administration page (`?do=pluginadmin`).

You can also add `favicons` to your list of enabled plugins in `data/config.json.php`.\
The `general.enabled_plugins` list should look like this:

```
"general": {
  "enabled_plugins": [
    "favicons",
    [...]
  ],
}
```

## Configuration
None - enable/disable in the Plugin Administration page.

## Credits
- [Google Favicon snatcher](https://www.google.com/s2/favicons?domain=www.google.com)
- [Iconify.design](https://iconify.design/)
- [Add Auto-sensing File Type Icons to lists of downloads, with FontAwesome and CSS](https://gschoppe.com/uncategorized/add-auto-sensing-file-type-icons-to-lists-of-downloads-with-fontawesome-and-css/) by [Greg Schoppe](http://gschoppe.com)
