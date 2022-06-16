<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<footer>
    <div class="footer_inner">
        <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/ivory_tower_lab_logo.png" alt="">
        <p class="Copyright">© 2020 Takumi Yamaguchi</p>
    </div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>

</html>