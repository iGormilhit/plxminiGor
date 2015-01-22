<?php include(dirname(__FILE__).'/head.php'); ?>

<section>

	<div class="content">

		<div class="full-width">

			<article role="article">

				<header>
					<h1>
						<?php $plxShow->lang('ERROR'); ?>
					</h1>
				</header>

				<section>
					<p>
						<?php $plxShow->erreurMessage(); ?>
					</p>
				</section>

			</article>

		</div>

	</div>

</section>

<?php include(dirname(__FILE__).'/header.php'); ?>
