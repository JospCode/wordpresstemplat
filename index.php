<?php get_header(); ?>

<?php //imprimir postagens ?>
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<h1>
			<a href="<?php echo get_attachment_link(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<p><?php the_content(); ?></p>

		<p><?php comments_number('0 Comentários', '1 Comentário', '% Comentários'); ?></p>

		<?php endwhile; else :?>
			<p><?php _e('Nenhum Comentário!'); ?></p>
		<?php endif; ?>
		
		<section class="content">
			<h1>FC Barcelona</h1>
			<p><b>História</b></p>
			<p>
				O FC Barcelona, fundado em 1899 por um grupo de jovens estrangeiros que viviam em Barcelona, foi o resultado do aumento da popularidade do futebol e de outros esportes britânicos na Europa. Tais origens conferiram ao clube a sua identidade intercultural, foco multiesportivo e a sua profunda lealdade a Barcelona e à Catalunha.
			</p>
			<p>

				A fundação do clube coincidiu com uma época onde as pessoas estavam se interessando pela prática de esportes na Catalunha; este contexto social e a cultura idiossincrática da Catalunha levou à criação de um novo modelo de lazer moderno.
			</p>
			<p>
				Joan Gamper, o fundador do clube, foi a inspiração e a força motriz por trás dos primeiros 25 anos do clube. O seu compromisso com o FC Barcelona foi muito além do seu papel como jogador, diretor e presidente. 
			</p>
		</section>
		<img width="1000" height="500" src="<?php bloginfo('template_url'); ?>/img/imagem1.jpeg" />
<?php get_sidebar(); ?>

<?php get_footer(); ?>