<?php

    
    $fields =  array(
'comment_notes_before' => '',
'comment_notes_after' => '',
'url' => '',
 
 'author' =>
    '<div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">' . __( 'Name', 'pceuropa' ) . ' *</div>
          <input class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" />
</div>',

'email' =>
    '<div class="input-group">
          <div class="input-group-addon">' . __( 'Email', 'pceuropa' ) . '</div>
          <input class="form-control" id="exampleInputEmail1" name="email" type="email" placeholder="' . __( 'nie bedzie publikowany', 'pceuropa' ) . '" value="' . esc_attr(  $commenter['comment_author_email']) .'"size="30" />
        </div>
      </div>',

);
    $comments_args = array(
 
        'title_reply'=> '',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field' =>  '<div class="form-group">
        <textarea id="comment" placeholder="' . _e( 'Comment', 'pceuropa' ) .'" name="comment" class="form-control"  rows="8" aria-required="true"></textarea></div>',
             'comment_notes_after' => ' ');
    

    

 if ( have_comments() ) : ?>



<ol class="comment-list">
<?php wp_list_comments([
	'style'      => 'ol',
	'short_ping' => true,
	'avatar_size'=> 34,
] );
?>
</ol><!-- .comment-list -->

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
	<h3 class="screen-reader-text"><?php _e( 'Comment navigation' ); ?></h3>
	<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments' ) ); ?></div>
	<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;' ) ); ?></div>
</nav><!-- #comment-nav-below -->
<?php endif; // Check for comment navigation. ?>
<?php endif; // have_comm
comment_form($comments_args);
?>


