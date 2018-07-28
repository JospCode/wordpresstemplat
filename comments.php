<ol>
	<?php 
		//comentários
		$comments = get_comments(array(
			'post_id'	=> xxx,
			'status'	=> 'approve' // tipo de comentario
		));

		wp_list_comments(array(
			'per_page'			=> 10,
			'reverse_top_level'	=> false
		), $comments);
	?>
</ol>

<?php
	$comments_args = array(
		'label_submit'		=> 'Enviar', //titulo botão
		'tittle_reply'		=> 'Responder', //rótulo resposta
		'comments_notes_after'		=> '', //texto/html exibido depois dos comentários
		'comments_field'		=> //campo de comentario
		'<p>
			<label for="comment">'._x( 'Comment', 'noun' ).'</label><br />
			<textarea id="comment" name="comment" aria-required="true"></textarea>
		</p>',
	);
	comment_form($comments_args);
?>