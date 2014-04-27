<?php include(dirname(__FILE__) . '/head.php'); ?>

<section>

	<div class="content">

		<div class="full-width">

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle(''); ?>
					</h1>
				</header>

				<section>
					<?php $plxShow->artContent(); ?>
				</section>

				<footer>
					<p>
						<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?> |
						<?php $plxShow->artCat(); ?> :
						<?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</div>

	</div>

</section>

<?php include(dirname(__FILE__) . '/header.php'); ?>
