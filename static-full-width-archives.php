<?php include(dirname(__FILE__) . '/head.php'); ?>

<section>

	<div class="content">

		<div class="full-width">

			<article role="article">

				<!-- <header>
					<h1>
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>

				<section>
					<?php $plxShow->staticContent(); ?>
				</section> -->
				
					<article class="archives">

						<h3>
							<?php $plxShow->lang('ARCHIVES'); ?>
						</h3>

						<ul>
							<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
						</ul>
					
					</article>
					
					<article class="archives">

						<h3>
							<?php $plxShow->lang('CATEGORIES'); ?>
						</h3>

						<ul>
							<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
						</ul>
					</article>
					
					<article>
					
						<h3>
							<?php $plxShow->lang('TAGS'); ?>
						</h3>

						<ul>
							<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>'); ?>
						</ul>
						
					</article>
				
				<section>
					
				</section>

			</article>

		</div>

	</div>

</section>

<?php include(dirname(__FILE__) . '/header.php'); ?>
