

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
  <aside class="sidebar col-md-4">
    <h1>Sidebar</h1>
    <?php get_search_form(); ?>
  </aside>
<?php endif; ?>
