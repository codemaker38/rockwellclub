<nav class="breadcrumbs">
	<div class="container">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-list__item">
				<a href="<?php echo url(); ?>" class="breadcrumbs-list__link">Home</a>
			</li>
			<li class="breadcrumbs-list__item">
				<span class="breadcrumbs-list__separator">></span>
			</li>
			<li class="breadcrumbs-list__item">
				<span class="breadcrumbs-list__link"><?php echo $page->title(); ?></span>
			</li>
		</ul>
	</div>
</nav>