# Gutenberg Block Styles Plugin

## Overview

This repository is meant to be an introuction to one of the simplest forms of customization in the editor: Block Styles. Block styles just add an extra classname to a block, so they're relatively simple to create and customize. 

![Block Styles Example](https://cldup.com/xpyaqSiB3h-3000x3000.png)

This repository is a WordPress plugin that includes a single custom block style. It's fairly barebones, and is meant to provide a boilerplate for more complicated plugins. The code here is a lightweight introduction to Gutenberg block customization, and doesn't require you to mess around with `npm`, themes, php, or (much) JavaScript. 

All you really need to get started is: 

- The courage to edit a few lines in a single JavaScript file. 
- Knowledge of CSS.
- A WordPress site to upload this plugin to (Alternatively, you can run a single Terminal command to create a quick development environment instead).  

## Usage

To try this plugin out, you have two options: 

### Install this plugin on your existing WordPress site.

This is the simplest approach. Just download a zip file of this repository, and upload it to your site as a plugin. Hit "Activate" and you're all set. 👏

### Or, spin up a quick development environment. 
	
Install [Docker CE](https://hub.docker.com/search/?type=edition&offering=community). 

In your Terminal, clone this repository:

```
git clone git@github.com:kjellr/gutenberg-block-styles.git
cd gutenberg-block-styles
```

Then, run this command to start the included development environment: 

```
docker-compose up -d
```

Once that command completes, you should be able to visit `http://localhost:9999/` to set up a brand new WordPress site for testing. The plugin will be automatically installed. You may need to visit the Plugins page in WP-Admin and activate the "Gutenberg Block Styles" plugin after installation. 

To stop the dev environment later on, just run: 

```
docker-compose stop
```

(This simple environment setup was borrowed from the [gutenberg-examples](https://github.com/WordPress/gutenberg-examples) repo. Check that out for more detailed development examples! 🚀)

### Activate the Plugin

Once the plugin is active, open up a new post using the Block editor. You should see a new Block Style added to the Paragraph blocks, called "Blue Paragraph": 

![Image of the "Blue Paragraph" Block Style](https://cldup.com/8_Y_9ypKSK-3000x3000.png)

## Customization

Adding + editing block styles is a three step process: 

**1. Open up the `block-styles.js` file and adjust the block type, name, and label for your new block style.**

For example, the built-in example adds a "Blue Paragraph" block style to the core Paragraph block: 

```
wp.blocks.registerBlockStyle( 'core/paragraph', {
	name: 'blue-paragraph',
	label: 'Blue Paragraph'
} );
```

Here's another example, adding an "Awesome Cover" style to the Cover block: 

```
wp.blocks.registerBlockStyle( 'core/cover', {
	name: 'awesome-cover',
	label: 'Awesome Cover'
} );
```

Those four lines are all you need to declare the new block style. The block name in the first line should refer to the official title for the block, but the `name` and `label` can follow whatever format you'd like. `name` will be used to generate a new classname for your block style, so please don't include any spaces there. 

If you'd like to add multiple block styles in the same plugin, just duplicate those four lines.

**2. From there, add the CSS to style your new block style.**

Block style classnames are automatically created using the following format: 

`.is-style-[name]`

`[name]` maps to the `name:` field from step 1. So the classnames for the two examples above would be: 

`.is-style-blue-paragraph`
`.is-style-awesome-cover`

Open up the `style.css` file, and add any CSS styles for your block. Anything you declare should be added to both the front and back end automatically.

**3. Test your changes.**

ZIP up the plugin with your changes and upload to your site, or view the changes in real-time on the Docker-powered dev environment outlined above. 🎉

## Questions? 

Happy to help! Open an issue (or a PR!), ping me `@kjellr` on twitter, or `@kjellr` on WordPress.org slack. 
