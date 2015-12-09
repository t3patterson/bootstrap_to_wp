#Wordpress Tricks 2

###turn on debugger in `wp-config.php`
```
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
```


### `./themes/«theme_name»/functions.php`

#####*Adding Styles*
`add_action(wp_enqueue_scripts, theme_styles)`  

Where `theme_styles` is a function that has `wp_enqueue_style («title», «uri»)` for all loaded style scripts

#####*Adding Scripts*
`add_action('wp_enqueue_scripts', 'theme_js');`

where `theme_js` is a function that registers scripts (with `wp_register_script`) and enqueues them (`wp_enqueue_script`)

#####Keyword-pages - `«sth».php`
- `index.php`
- `header.php`
- `footer.php`
- `front-page.php`
  - 

###Plugins
- Bootstrap  shortcodes - for bootstrap formatted layouts on Pages
- Black Studio TinyMCE Widget - for visual editor in widgets

###Page wp Methods
`have_posts()`
`the_title()`
`the_content()`

`get_sidebar()`
`get_template_part(«template-name»)`
`get_header()`
`get_footer()`


###Widgets

###The Blog
blog located in : `home.php` file
the link for a single posting is located in `single.php`

####wp methods
#####For Iterating
`have_posts()`
`the_post()`

#####Accessing data from the post
`the_title()`
`the_author()`
`the_content()`
`the_excerpt()`
`the_category(«separator-string»)`
`the_permalink()`

`comment_template`
`comments_link()`
`comments_number()`

`the_excerpts()`
`the_title()`

####Iterating over posts
```
<?php
if ( have_posts() ) {
    while ( have_posts() ) {

        the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php }
}
?>
```

####The blog's comments
from `single.php`: you need to reference  `<?php comments_template(); ?>` which will look for a file `comments.php`

inside `comments.php`

1- the comment from 
```
<?php comment_form($args) ?>
```
...note: you will have to style this

2- the comment iterator for display
```
<?php
if ( have_comments() ) {
    while ( have_posts() ) {

        <?php get_avatar($comment, 50); ?>

        <h6><?php comment_author(); ?></h6>

        <p><?php comment_text(); ?></p>

    <?php }
}
?>
```
