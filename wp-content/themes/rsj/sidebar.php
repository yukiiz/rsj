<aside>

	<p>月別</p>
	<ul>
		<?php wp_get_archives(
array(
’post_type’ => ‘news’,
’type’ => ‘monthly’,
)
);?>
	</ul>

</aside>