<div class="sidebar">
  <ul>
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
    <!--
    <li id="search">
      <?php include(TEMPLATEPATH . '/searchform.php'); ?>
    </li>
    <?php wp_list_pages('depth=3&title_li=<h2>Pages</h2>'); ?>
    <?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li=<h2>Categories</h2>'); ?>
  --><?php endif; ?>
  </ul>
</div>
