<div class="widget-prevnext">
<?php if( ( $this->uri->segment(1) == 'blog' ) && ( $id != 0 ) ): ?>
	<?php if (!empty($prev_title)): ?>
	<div class="prevnext-prev-link">&lt; Previous Post: <a href="<?php echo $prev_url ?>" title="<?php echo $prev_title ?>"><?php echo $prev_title ?></a></div>
	<?php endif ?>
	<?php if (!empty($next_title)): ?>
	<div class="prevnext-next-link">Next Post: <a href="<?php echo $next_url?>" title="<?php echo $next_title ?>"><?php echo $next_title ?></a> &gt;</div>
	<?php endif ?>
<?php endif; ?>
</div>