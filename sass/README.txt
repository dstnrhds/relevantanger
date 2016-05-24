<<<<<<< HEAD
ZEN'S STYLESHEETS
-----------------

Don't panic!

There are a lot of files in this Sass folder. A lot. 56, actually.

I swear to you I'm going to give you a good reason not to panic. Just give me
a minute. (ヘ･_･)ヘ┳━┳

Okay, how about just panicking slightly while I collect my thoughts.
(╯°□°）╯︵ ┻━┻

Okay. Okay. There _are_ 56 Sass files in this sub-theme, but it's not as bad as
it first seems.

Why not just one stylesheet?

- For performance reasons you should always have all of your CSS in a single
  file to minimize the number of HTTP requests the user's browser needs to do.
  Fortunately, Drupal has a "Aggregate and compress CSS" feature that will
  automatically combine all the CSS files from its modules and themes into one
  file. You can turn on that feature under "Bandwidth Optimization" on the page:
    Administration > Configuration > Development > Performance
  So Drupal allows us (if we want) to use more than one stylesheet file, but
  still serves all the styles in one file to our users.

- When developing a site using a single stylesheet, it can become unwieldy to
  scroll and find the place you need to edit. As a deadline becomes imminent,
  developers often start stuffing new styles at the bottom of the stylesheet,
  completely destroying any stylesheet organization.

- Instead of one monolithic stylesheet, Zen sub-themes' CSS files are organized
  into many small stylesheets. Once you learn the organization (described
  below) it becomes easier to find the right place to add new styles.

- All the Sass files are imported into the styles.scss so all the CSS is output
  to the styles.css file.

ORGANIZATION OF STYLESHEETS
---------------------------

All of the styles in this sub-theme are built using component-based designs. To
learn more about component-based design, watch the Drupalcon presentation,
"Style Guide Driven Development: All hail the robot overlords!"
https://events.drupal.org/losangeles2015/sessions/style-guide-driven-development-all-hail-robot-overlords

The Sass files are organized in a simple file hierarchy, and, best of all are
documented in a style guide which is super easy to keep up-to-date. Open the
style guide to learn more about the styles and Sass used in this sub-theme.

Open the styleguide/index.html file in a web browser.


ABOUT SASS
----------
=======
ABOUT SASS AND COMPASS
----------------------
>>>>>>> 7ac2e7ea2e3a668eebd93e029d65a42280aff5e7

This directory includes Sass versions of Zen's CSS files.

Sass is a language that is just normal CSS plus some extra features, like
variables, nested rules, math, mixins, etc. If your stylesheets are written in
Sass, helper applications can convert them to standard CSS so that you can
include the CSS in the normal ways with your theme.

To learn more about Sass, visit: http://sass-lang.com

<<<<<<< HEAD
Since Sass is just a language, we also need an executable that can easily
convert Sass files into CSS. We use node-sass to convert our files to CSS. And
we use Gulp.js to run node-sass and many other useful front-end tasks.


DEVELOPING WITH SASS
--------------------

To automatically generate the CSS versions of the scss while you are doing theme
development, you'll need to tell Gulp to "watch" the sass directory so that
any time a .scss file is changed it will automatically generate a CSS file in
your sub-theme's css directory:

  gulp watch
=======
Compass is a helper library for Sass. It includes libraries of shared mixins, a
package manager to add additional extension libraries, and an executable that
can easily convert Sass files into CSS.

To learn more about Compass, visit: http://compass-style.org


DEVELOPING WITH SASS AND COMPASS
--------------------------------

To automatically generate the CSS versions of the scss while you are doing theme
development, you'll need to tell Compass to "watch" the sass directory so that
any time a .scss file is changed it will automatically place a generated CSS
file into your sub-theme's css directory:

  compass watch <path to your sub-theme's directory>

  If you are already in the root of your sub-theme's directory, you can simply
  type:  compass watch

While using generated CSS with Firebug, the line numbers it reports will be
wrong since it will be showing the generated CSS file's line numbers and not the
line numbers of the source Sass files. To correct this problem, you can install
the FireSass plug-in into Firefox and then edit your sub-theme's config.rb file
to set: firesass = true
  https://addons.mozilla.org/en-US/firefox/addon/firesass-for-firebug/
>>>>>>> 7ac2e7ea2e3a668eebd93e029d65a42280aff5e7


MOVING YOUR CSS TO PRODUCTION
-----------------------------

<<<<<<< HEAD
Simple! Generate your CSS with: gulp
=======
Once you have finished your sub-theme development and are ready to move your CSS
files to your production server, you'll need to tell sass to update all your CSS
files and to compress them (to improve performance). Note: the Compass command
will only generate CSS for .scss files that have recently changed; in order to
force it to regenerate all the CSS files, you can use the Compass' clean command
to delete all the generated CSS files.

- Delete all CSS files by running: compass clean
- Edit the config.rb file in your theme's directory and uncomment this line by
  deleting the "#" from the beginning:
    #environment = :production
- Regenerate all the CSS files by running: compass compile
>>>>>>> 7ac2e7ea2e3a668eebd93e029d65a42280aff5e7

And don't forget to turn on Drupal's CSS aggregation. :-)
