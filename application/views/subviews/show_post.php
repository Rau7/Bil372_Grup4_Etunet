<div class="card" style="width: 250%;">
    <div class="card-body" style="background-color: #ecf0f1;">
        <h5 class="card-title"><?php echo $post['post_title']; ?></h5>
        <p class="card-text"><?php echo $post['post_short_desc']; ?></p>
        <p class="card-text"><?php echo $post['post_long_desc']; ?></p>
        <p class="card-text"><?php echo $post['post_date']; ?></p>
        <?php if($post['post_student_id'] == $added_id || $post['post_teacher_id'] == $added_id){ ?>
        	<div style="text-align: right;">
        		<a href="<?php echo MAIN; ?>Posts/update_post/<?php echo $post['post_id']; ?>" class="card-link">Edit Post</a>	
        	</div>
        <?php } ?>
    </div>
</div>

<hr class="rounded" style="width: 250%;">

<h1>Comments will be added</h1>