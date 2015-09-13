
<div class="main-container container">
	<header id="page-header" role="banner"><?php if($site_slogan): ?>
		<p class="lead"><?php print check_plain($site_slogan); ?></p><?php endif; ?><?php print render($page['header']); ?>
	</header>
	<div class="row"><?php if(!empty($page['sidebar_first'])): ?>
		<aside role="complementary" class="col-sm-3"><?php print render($page['sidebar_first']) ?>
		</aside><?php endif; ?><?php print "<section $content_column_class >"; ?><?php if(!empty($page['highlighted'])): ?>
		<div class="highlighted jumbotron"><?php print render($page['highlighted']);; ?></div><?php endif; ?><?php if(!empty($breadcrumb)): ?><?php print $breadcrumb; ?><?php endif; ?><a id="main-content"></a><?php print render($title_prefix); ?><?php if (!empty($title)): ?>
		<h1 class="page-header"><?php print $title; ?></h1><?php endif; ?><?php print $messages; ?><?php if(!empty($tabs)): ?><?php print render($tabs); ?><?php endif; ?><?php if(!empty($page['help'])): ?><?php print render($page['help']); ?><?php endif; ?><?php if(!empty($action_links)): ?>
		<ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?><?php print render($page['content']); ?><?php print "</section>"; ?><?php if(!empty($page['sidebar_second'])): ?>
		<aside role="complementary" class="col-sm-3"><?php print render($page['sidebar_second']) ?>
		</aside><?php endif; ?>
	</div>
</div>