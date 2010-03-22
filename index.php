<?php get_header() ?>

  <div id="content">
    <h3 class="page-subtitle"><span>Noticias</span></h3> 
  
    <?php while ( have_posts() ) : the_post() ?>
    <div id="post-<?php the_ID() ?>" class="post">
      <h1 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h1>               
      <div class="post-meta">Publicado el <?php the_time('j F Y'); ?> en <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link('Comenta esta noticia', '1 comentario', '% comentarios') ?></div>
      <div class="post-content">
        <?php the_content('Continúa leyendo &raquo;'); ?>
      </div>
    </div><!-- .post -->
    <?php endwhile ?>

    <div class="navigation">
      <div class="navleft"><?php next_posts_link('&laquo; Noticias más antiguas', '0') ?></div>
      <div class="navright"><?php previous_posts_link('Noticias más recientes &raquo;', '0') ?></div>
    </div>

  </div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>