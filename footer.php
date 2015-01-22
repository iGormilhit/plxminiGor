<?php if (!defined('PLX_ROOT')) exit; ?>

<footer role="contentinfo">

	<div class="content">

		<p>
			<?php $plxShow->mainTitle('link'); ?> : <?php $plxShow->subTitle(); ?>
		</p>
		<p>
			<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> 
			<?php $plxShow->httpEncoding() ?>
		</p>

	</div>

</footer>

</body>

</html>
