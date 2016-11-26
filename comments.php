<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments"><?php _e("Tento příspěvek je chráněn heslem. Zadejte heslo pro zobrazení komentářů."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<div id="comment">
	<br/>
<?php if ($comments) : ?>
	<p><?php comments_number('Nekomentováno', '1 komentář', '% komentáře(ů)' );?> pro &#8220;<?php the_title(); ?>&#8221;</p> 
<ol id="commentlist">
    <?php foreach ($comments as $comment) : ?>
    <li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
        <?php comment_author_link()?> z 
        <?php comment_date('j.F, Y') ?>
        <?php comment_time()?>
		<?php edit_comment_link(__("Editovat"), ''); ?> 

      <?php if ($comment->comment_approved == '0') : ?>
      <em>Your comment is awaiting moderation.</em>
      <?php endif; ?>
      <?php 
					if(the_author('', false) == get_comment_author())
						echo "<div class='commenttext-admin'>";
					else
						echo "<div class='commenttext'>";
					comment_text();
					echo "</div>";
					
					?>
    </li>
    <?php /* Changes every other comment to a different class */	
					if ('alt' == $oddcomment){
						$oddcomment = 'standard';
					}
					else {
						$oddcomment = 'alt';
					}
				?>
    <?php endforeach; /* end for each comment */ ?>
  </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		
		
	<?php endif; ?>
<?php endif; ?>
<div class="entry">
<p>
<?php if ($post->ping_status == "open") { ?>
	<a href="<?php trackback_url(display); ?>">Trackback URI</a>  |
<?php } ?>
<?php if ($post-> comment_status == "open") {?>
	<?php comments_rss_link('Komentáře RSS'); ?>
<?php }; ?>
<?php if ($post-> comment_status == "closed") {?>
	Komentáře nejsou povoleny.
<?php }; ?>
</p>
</div>

<?php if ('open' == $post-> comment_status) : ?>

<p>Zanechte komentář</p>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Musíte <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">být přihlášen/a</a> k napsání komentáře.</p></div>
<?php else : ?>

<div id="commentsform">
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      
      <p>Jste přihlášen jako <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Pro odhlášení klikněte na') ?>"> Odhlásit &raquo; </a> </p>
      <?php else : ?>
      
      <p><?php _e('Jméno, nick *');?><?php if ($req) _e('(required)'); ?><br />
      <input type="text" name="author" id="s1" value="<?php echo $comment_author; ?>" size="30" tabindex="1" />
      </p>
      
      <p><?php _e('e-mail');?><?php if ($req) _e('(required)'); ?><br />
      <input type="text" name="email" id="s2" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" />
      </p>
      
      <p><?php _e('Webová stránka');?><br />
      <input type="text" name="url" id="s3" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />
      </p>
      
      <?php endif; ?>
      <!--<p>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></p>-->
      <p><?php _e('Váš názor');?><br />
      <textarea name="comment" id="s4" cols="90" rows="10" tabindex="4"></textarea>
      </p>
      
      <p>
        <input name="submit" type="submit" id="hbutt" tabindex="5" value="Odeslat komentář" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
</div>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>
<!-- end comment -->
