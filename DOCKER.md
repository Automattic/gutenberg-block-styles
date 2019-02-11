## Included Docker Enviornment

To make development easier, this repo includes a simple, 100% optional development environment. 

If you'd like to use it, you first need to install [Docker CE](https://hub.docker.com/search/?type=edition&offering=community). Then, from your Terminal, clone this repository:

```
git clone git@github.com:kjellr/gutenberg-block-styles.git
cd gutenberg-block-styles
```

Afterwards, run this command to start the included development environment: 

```
docker-compose up -d
```

Once that command completes, you should be able to visit `http://localhost:9999/` to set up a brand new WordPress site for testing. The plugin will be automatically installed. You may need to visit the Plugins page in WP-Admin and activate the "Gutenberg Block Styles" plugin after installation. 

To stop the dev environment later on, just run: 

```
docker-compose stop
```

This simple environment setup was borrowed from the [gutenberg-examples](https://github.com/WordPress/gutenberg-examples) repo. Check that out for more detailed development examples! 🚀