<header class="header" id="header" role="banner">

  <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
  <?php endif; ?>

  <?php if ($site_name || $site_slogan): ?>
    <div class="header__name-and-slogan" id="name-and-slogan">
      <?php if ($site_name): ?>
        <h1 class="header__site-name" id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php print render($page['header']); ?>

</header>

<div id="navigation">

  <?php if ($main_menu): ?>
    <nav id="main-menu" role="navigation" tabindex="-1">
      <?php print theme('links__system_main_menu', array(
        'links' => $main_menu,
        'attributes' => array(
          'class' => array('links', 'inline', 'clearfix'),
        ),
        'heading' => array(
          'text' => t('Main menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      )); ?>
    </nav>
  <?php endif; ?>

  <?php print render($page['navigation']); ?>

</div>

<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

</div>

<?php print render($page['footer']); ?>

<?php print render($page['bottom']); ?>

<section class="copyright" id="copyright">&copy; <?php print date('Y'); ?> The Armory Workspace. All rights reserved.
  <p id="social"><a href="https://twitter.com/armoryworkspace" target="_blank" class="tw">Follow us on Twitter</a> <a href="https://www.facebook.com/thearmoryworkspace" target="_blank" class="fb">Follow us on Facebook</a></p>
</section>