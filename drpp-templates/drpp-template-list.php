<?php /*
List template
This template returns the related posts as a comma-separated list.
Author: Rahul
*/ 
?><h3>Related Posts</h3>

<?php if ($related_query->have_posts()):
	$postsArray = array();
	while ($related_query->have_posts()) : $related_query->the_post();
		$postsArray[] = '<a href="'.get_permalink().'" rel="bookmark">'.get_the_title().'</a><!-- ('.get_the_score().')-->';
	endwhile;
	
echo implode(', '."\n",$postsArray); // print out a list of the related items, separated by commas

else:?>

<p>No related posts.</p>
<?php endif; ?>
