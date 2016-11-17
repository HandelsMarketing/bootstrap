<div class="post-page">
	<div class="post">
		<header class="post-header">
			<h1 class="post-title"><?= get_the_title(); ?></h1>
			<div class="post-meta">
				<span class="post-date"><?= get_the_date() ?></span>
				<span class="post-category"><?= get_the_category_list(); ?></span>
			</div>
		</header>
		<?php
			echo get_the_content();
		?>
	</div><div class="post-sidebar">
		Sidebar
	</div>

</div>

