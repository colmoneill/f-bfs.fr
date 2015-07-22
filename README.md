# F&Brkfst.fr wordpress theme

Thanks to the [WordPress Starter Theme](https://github.com/mattbanks/WordPress-Starter-Theme) by Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [collectivthkg.com](http://collectivthkg.com) / [mattbanks.me](http://www.mattbanks.me) )
Version: 4.2.1

## Bits I'm keeping of the initial README

### Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile SCSS (with source maps), run it through [AutoPrefixr](https://github.com/ai/autoprefixer), lint, concatenate and minify JavaScript (with source maps), optimize images, and syncs changes across local development devices with [BrowserSync](https://github.com/shakyShane/browser-sync), with flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use [CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS and manage the JavaScript.

Rename folder to your theme name, change the `style.scss` intro block to your theme information. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies. Run `grunt` to execute tasks. Code as you will.

If you are using MAMP or Vagrant, change the `proxy` option in the `grunt browserSync` task to match your vhost URL.

- Compile `assets/styles/style.scss` to `style.css`
- Compile `assets/styles/editor-style.scss` to `editor-style.css`
- Concatenate and minify plugins in `assets/js/vendor` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify and lint `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit

To concatenate and minify your jQuery plugins, add them to the `assets/js/vendor` directory and add the `js` filename and path to the `Gruntfile` `uglify` task. Previous versions of the starter theme automatically pulled all plugins in the `vendor` directory, but this has changed to allow more granular control and for managing plugins and assets with bower.

### Deployment

The theme includes deployments via [grunt-rsync](https://github.com/jedrichards/grunt-rsync). The Gruntfile includes setups for staging and production - edit your paths and host, then run `grunt deploy:staging` or `grunt deploy:production` to deploy your files via rsync.