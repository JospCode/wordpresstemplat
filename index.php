<?php get_header(); ?>

<?php //imprimir postagens ?>
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="inde">
		<h1>
			<a href="<?php echo get_attachment_link(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
	
		<p><?php the_content(); ?></p>

		<p><?php comments_number('0 Comentários', '1 Comentário', '% Comentários'); ?></p>
	
	</div>

		<?php endwhile; else :?>
			<p><?php _e('Nenhum Comentário!'); ?></p>
		<?php endif; ?>
<br>	
<hr>

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

			<img width="1000" height="500" src="<?php bloginfo('template_url'); ?>/img/imagem1.jpeg" />
			
			<p>
				O Barcelona é um dos clubes com o maior número de torcedores ao redor do mundo, se tornando a equipe com o maior número de seguidores em redes e mídias sociais entre todos os esportes. Os jogadores do Barcelona possuem o recorde de maior número de conquistas do prêmio de Futebolista do Ano na Europa, com sete vitórias, bem como o de Melhor jogador do mundo pela FIFA, com quatro no total onze vitórias. Em 2010, o clube fez história quando três de seus jogadores disputaram o título de melhor jogador do mundo (Messi, Iniesta e Xavi) foram escolhidos como os três melhores jogadores do mundo no FIFA Ballon d'Or de 2010.
			</p>
			<p>
				O clube é um dos membros fundadores da La Liga, e também um dos únicos três que nunca foi rebaixado para a Segunda Divisão, juntamente com o Real Madrid e o Athletic Bilbao. Em 2009, o Barcelona se tornou a primeira equipe espanhola a vencer a tríplice coroa, conquistando a La Liga, a Copa del Rey e a Liga dos Campeões da UEFA, e adicionalmente, fez história ao ser o primeiro clube no mundo a vencer as seis competições que disputou, sendo que completou o sêxtuplo triunfando na Supercopa da Espanha, na Supercopa da UEFA e na Copa do Mundo de Clubes.
			</p>
		</section>
<br>
<hr>

<?php get_sidebar(); ?>	

<?php get_footer(); ?>