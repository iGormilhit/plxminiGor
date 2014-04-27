<?php include(dirname(__FILE__).'/head.php'); ?>

<section>

	<div class="content">

		<div class="full-width">
		
			<div class="list-titles">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">
			
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>
					</p>

			</article>

			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			</div>		
		
		</div>

	</div>

</section>

<?php include(dirname(__FILE__).'/header.php'); ?>
