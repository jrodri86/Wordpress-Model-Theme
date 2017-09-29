<?php if(have_comments()) { ?>

<h3><?php comments_number(
    __('No comments yet :-(', 'apk'), 
    __('Hey! looks like there is a comment here!', 'apk'),
    __('There are % comments! Cool.', 'apk')
); ?></h3>

<ol id="comments-list"><?php wp_list_comments();?></ol>

<?php
    paginate_comments_links();
?>

<?php } ?>

<?php comment_form();?>