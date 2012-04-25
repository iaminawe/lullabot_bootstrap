<header id="header">

  <div class="container">
    <div id="header-top" class="row visible-desktop">
      <div class="span3">
        <?php if ($logo): ?>
        <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        <?php endif; ?>

      </div>


      <?php if ($page['header']): ?>
      <div class="span9">
        <?php print render($page['header']); ?>
      </div>  <!-- /#header -->
      <?php endif; ?>


    </div>



    <div id="nav" role="banner" class="navbar">
      <div class="navbar-inner">

        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <div class="row">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </a>
        </div>


        <div class="nav-collapse">
          <nav role="navigation">
            <?php if ($primary_nav): ?>
              <?php print $primary_nav; ?>
            <?php endif; ?>

            <?php if ($search): ?>
              <div id="nav-search">
                <?php if ($search): print render($search); endif; ?>
              </div>
            <?php endif; ?>

          </nav>
        </div>

      </div>
    </div>
  </div>
</header>

<div id="main">
  <div class="container">
    <?php if ($page['hero']): ?>
      <div id="hero">
      <?php print render($page['hero']); ?>
      </div>
    <?php endif; ?>




    <div class="row">


      <?php if ($page['sidebar_first']): ?>
        <aside id="primary-sidebar-region" class="span4" role="complementary">
          <div id="primary-sidebar-wrapper" class="sidebar-wrapper">
            <?php print render($page['sidebar_first']); ?>
          </div>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <section  id="main-content-region" class="<?php print lullabot_bootstrap_content_span($columns); ?>">
        <div id="main-content-wrapper">
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if ($tabs): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </section>

      <?php if ($page['sidebar_second']): ?>
        <aside id="secondary-sidebar-region" class="span4" role="complementary">
          <div id="secondary-sidebar-wrapper" class="sidebar-wrapper">
            <?php print render($page['sidebar_second']); ?>
          </div>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>

    </div>

    <?php if ($page['content_bottom']): ?>
    <div class="row">
      <div id="content-bottom-region" class="span12">
      <?php print render($page['content_bottom']); ?>
      </div>
    </div>

    <?php endif; ?>




  </div>
</div>

<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="span6">
        <?php if ($page['footer']): ?>
          <?php print render($page['footer']); ?>
        <?php endif; ?>
      </div>
      <div class="span6">
        <?php if ($page['footer_menu']): ?>
          <?php print render($page['footer_menu']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>


	

