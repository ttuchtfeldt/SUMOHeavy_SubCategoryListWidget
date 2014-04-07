SUMO Heavy's Subcategory List Widget
===========
This module allows you to add a widget that will list out categories in a template file that is easily modifable in your custom theme. You can choose the category parent easily through the widget options when inserting it in to a page.

### Magento Composer Setup
Create a composer.json file in your Magento install, using this as an example:
```
{
  "require": {
    "php": ">=5.2.13",
    "magento-hackathon/magento-composer-installer":"*",
    "sumoheavy/magento-global-message": "dev-master"
  },
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/magento-hackathon/magento-composer-installer"
    },
    {
      "type": "vcs",
      "url": "git@github.com:sumoheavy/SUMOHeavy_GlobalMessage.git"
    }
  ],
  "extra": {
    "magento-root-dir": ".",
    "magento-deploystrategy": "copy"
  }
}
```

Note: Be sure to .gitignore the vendor/ directory
