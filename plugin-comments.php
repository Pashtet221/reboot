<?php
/**
 * Support discussion shown on singular plugin pages.
 *
 * @package reboot
 */

if (post_password_required()) {
	return;
}

$commenter = wp_get_current_commenter();
$required  = (bool) get_option('require_name_email');
$required_attribute = $required ? ' required="required"' : '';
?>

<section id="comments" class="ps-plugin-discussion comments-area" aria-labelledby="ps-plugin-discussion-title">
	<div class="container">
		<div class="ps-plugin-discussion__inner">
			<header class="ps-plugin-discussion__heading">
				<h2 id="ps-plugin-discussion-title">Вопросы и обсуждение</h2>
				<p>Остались вопросы по плагину? Спросите об установке, настройке, совместимости или предложите новую функцию.</p>
			</header>

			<?php if (have_comments()) : ?>
				<ol class="comment-list">
					<?php
					wp_list_comments(array(
						'type'       => 'comment',
						'style'      => 'ol',
						'callback'   => 'vetteo_comment',
						'short_ping' => true,
					));
					?>
				</ol>

				<?php the_comments_pagination(array('prev_text' => '← Ранее', 'next_text' => 'Далее →')); ?>
			<?php endif; ?>

			<?php if (comments_open()) : ?>
				<?php
				comment_form(array(
					'title_reply'          => 'Задать вопрос',
					'title_reply_to'       => 'Ответить пользователю %s',
					'cancel_reply_link'    => 'Отменить ответ',
					'label_submit'         => 'Отправить вопрос',
					'comment_notes_before' => '',
					'comment_notes_after'  => '',
					'comment_field'        => '<p class="comment-form-comment"><label class="screen-reader-text" for="comment">Ваш вопрос</label><textarea id="comment" name="comment" maxlength="65525" required="required" placeholder="Ваш вопрос"></textarea></p>',
					'fields'               => array(
						'author' => '<p class="comment-form-author"><label class="screen-reader-text" for="author">Имя</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" maxlength="245"' . $required_attribute . ' placeholder="Имя"></p>',
						'email'  => '<p class="comment-form-email"><label class="screen-reader-text" for="email">Email</label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" maxlength="100"' . $required_attribute . ' placeholder="Email"></p>',
					),
				));
				?>
			<?php else : ?>
				<p class="ps-plugin-discussion__closed">Обсуждение закрыто.</p>
			<?php endif; ?>
		</div>
	</div>
</section>
