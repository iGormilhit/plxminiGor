<aside>

	<header role="banner">

		<div class="content">

			<h1>
				<?php $plxShow->mainTitle('link'); ?>
			</h1>

			<h2>
				<?php $plxShow->subTitle(); ?>
			</h2>
			
			<a href="<?php $plxShow->racine() ?>" title="<?php $plxShow->mainTitle(''); ?>"><img id="avatar" alt="mon avatar : un mickey fâché sur fond rose" src="themes/miniGor/img/avatar.jpg"/></a>
			
			<?php eval($plxShow->callHook('MySearchForm')) ?>

		</div>

	</header>
	
	<nav role="navigation">

		<div class="content">
			<ul>
				<li><a href="http://id-libre.org" title="id-libre">id-libre</a></li>
				<?php $plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?> 
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" class="rss" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
					<?php $plxShow->lang('ARTICLES'); ?></a></li>
			</ul>

		</div>

	</nav>	
	
	<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer role="contentinfo">

		<div class="content">

			<small>
				<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> 
				<?php $plxShow->httpEncoding() ?>
			</small>

		</div>

	</footer>
	

</aside>

</body>

</html>


