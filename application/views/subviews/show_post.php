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

<h1>Comments</h1>
<?php foreach ($comments as $comment) { ?>
    <div class="card" style="width: 250%;">
      <div class="card-body">
        <?php if($comment['comment_added_id'] == $added_id || $type === 'teacher'){ ?>
            <a href="<?php echo MAIN; ?>Posts/delete_comment/<?php echo $comment['comment_id']; ?>" role="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </a>
        <?php } ?>
        <blockquote class="blockquote mb-0">
          <p><?php echo $comment['comment_desc']; ?></p>
          <p><?php echo $comment['comment_date']; ?></p>
          <?php if($comment['comment_added_type'] === 'teacher'){ ?>
            <footer class="blockquote-footer"> <cite title="Source Title"><?php echo $comment_added_name[0]['teacher_name']; ?></cite></footer>
          <?php } ?>
          <?php if($comment['comment_added_type'] === 'student'){ ?>
            <footer class="blockquote-footer"> <cite title="Source Title"><?php echo $comment_added_name[0]['student_name']; ?></cite></footer>
          <?php } ?>
        </blockquote>

        <?php if($comment['comment_added_id'] == $added_id || $type === 'teacher'){ ?>
        <div style="text-align: right;">
            <a >Edit Comment</a>  
        </div>
        <?php } ?>
      </div>
    </div>
<?php } ?>
