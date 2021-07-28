# Gutenberg Block Styles Plugin

## Overview

This repository is an introduction to one of the simplest forms of customization in the editor: Block Styles. Block Styles just add an extra classname to a block, so they're relatively simple to create and customize. 

![Block Styles Example](https://cldup.com/xpyaqSiB3h-3000x3000.png)

Read more about block styles in this ThemeShaper post: 

[**📄 Customizing Gutenberg blocks with block styles**](https://themeshaper.com/2019/02/15/customizing-gutenberg-blocks-with-block-styles/)

This repository is a WordPress plugin that includes a single custom block style. It's fairly barebones, and is meant to provide a boilerplate for more complicated plugins. The code here is a lightweight introduction to Gutenberg block customization, and doesn't require you to mess around with `npm`, themes, php, or (much) JavaScript. 

All you really need to get started is: 

- The courage to edit a few lines in a single PHP file. 
- Knowledge of CSS.
- A WordPress site to upload this plugin to (Alternatively, you can run a single Terminal command to create a quick development environment instead).  

## Customization

Adding + editing block styles is a three step process: 

**1. Open up the `index.php` file and adjust the block type, name, and label for your new block style.**

For example, the built-in example adds a "Blue Paragraph" block style to the core Paragraph block: 

```php
register_block_style(
	'core/paragraph', // Block type name "cover" including namespace "core"
	array(            // Properties of the style
		'name'         => 'blue-paragraph',
		'label'        => 'Blue Paragraph',
		'style_handle' => 'block-styles-stylesheet',
	)
);
```

Here's another example, adding an "Awesome Cover" style to the Cover block: 

```php
register_block_style(
	'core/cover', // Block type name "cover" including namespace "core"
	array(        // Properties of the style
		'name'         => 'awesome-cover',
		'label'        => 'Awesome Cover',
		'style_handle' => 'block-styles-stylesheet',
	)
);
```

* The block name in the second line should refer to the official title for the block.
* The `name` Property should be lowercase letters with hyphens. It is used to generate the class for your block style.
* The `label` Property should be human readable, and probably translatable.
* The `style_handle` Property needs to be the handle of a style previously registered using `wp_register_style()`

If you'd like to add multiple block styles in the same plugin, duplicate those 8 lines and replace the Properties.

**2. From there, add the CSS to style your new block style.**

Block style classnames are automatically created using the following format: 

`.is-style-[name]`

`[name]` maps to the `name:` field from step 1. So the classnames for the two examples above would be: 

`.is-style-blue-paragraph`
`.is-style-awesome-cover`

Open up the `style.css` file, and add any CSS styles for your block. Anything you declare should be added to both the front and back end automatically.

**3. Test your changes.**

Zip up the plugin with your changes and upload to your site, or if you'd prefer, test the changes in real-time using the included [Docker-powered dev environment](DOCKER.md). 🎉

## More Documentation

- [Block Style Variations](https://developer.wordpress.org/block-editor/developers/filters/block-filters/#block-style-variations) in the Block Editor Handbook
- [Server-side Registration Helper](https://developer.wordpress.org/block-editor/developers/filters/block-filters/#server-side-registration-helper) in the Block Editor Handbook (This is the method of registration used in these examples.)

## Questions? 

Happy to help! Open an issue (or a PR!), ping `@kjellr` on twitter, or `@kjellr` on WordPress.org slack. 
