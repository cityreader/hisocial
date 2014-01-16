<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php if ($page['header']): ?>
  <div id='header'><div class='container clearfix'>
    <?php print render($page['header']); ?>
  </div></div>
<?php endif; ?>

<div id='branding'><div class='container clearfix'>

</div></div>

<div id='navigation'><div class='container clearfix'>
  <div class="topbar-wrapper">
    <div class="topbar" data-dropdown="dropdown">
      <div class="topbar-inner">
        <div class="container">
          <?php if ($site_name): ?><h1 class='site-name'><?php print $site_name ?></h1><?php endif; ?>
  <?php if (isset($main_menu)) : ?>
    <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'nav'))) ?>
  <?php endif; ?>
  <?php if (isset($secondary_menu)) : ?>
    <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => 'nav secondary-nav'))) ?>
  <?php endif; ?>
  <?php //print $search_box; ?>
        </div>
      </div><!-- /topbar-inner -->
    </div><!-- /topbar -->
  </div>
</div></div>

<?php if ($page['highlighted']): ?>
  <div id='highlighted'><div class='container clearfix'>
    <?php print render($page['highlighted']); ?>
  </div></div>
<?php endif; ?>

<div id='page'><div class='container clearfix'><div class="row">

  <?php if ($page['sidebar_first']): ?>
    <div id='left' class='span clearfix'><?php print render($page['sidebar_first']) ?></div>
  <?php endif; ?>

  <div id='main-content' class='span clearfix'>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class='page-title'><?php print $title ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($page['help'] || ($show_messages && $messages)): ?>
      <div id='console'><div class='clearfix'>
        <?php print render($page['help']); ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
      </div></div>
    <?php endif; ?>
    <?php if ($primary_local_tasks): ?><ul class='links tabs clearfix'><?php print render($primary_local_tasks) ?></ul><?php endif; ?>
    <?php if ($secondary_local_tasks): ?><ul class='links pills clearfix'><?php print render($secondary_local_tasks) ?></ul><?php endif; ?>
    <?php if ($action_links): ?><ul class='links clearfix'><?php print render($action_links); ?></ul><?php endif; ?>
    <div id='content' class='clearfix'><?php print render($page['content']) ?></div>
  </div>

  <?php if ($page['sidebar_second']): ?>
    <div id='right' class='span clearfix'><?php print render($page['sidebar_second']) ?></div>
  <?php endif; ?>

</div></div></div>

<div id="footer"><div class='container clearfix'>
  <?php if ($breadcrumb) print $breadcrumb; ?>
  <?php print $feed_icons ?>
  <?php print render($page['footer']) ?>
</div></div>
