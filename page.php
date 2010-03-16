<?php get_header() ?>
  <?php the_post() ?>

  <?php if (is_page(33)): ?>
    <div class="submenu">
      <ul>
        <li><a href="#que">Qué es</a></li>
        <li><a href="#objetivos">Objetivos</a></li>
        <li><a href="#iniciativas">Iniciativas similares</a></li>
        <li><a href="#ideas">Qué proyectos puedes surgir</a></li>
        <li><a href="#quien">Quién lo impulsa...</a></li>
      </ul>
    </div>
  <?php endif ?>


  <div id="content">     
    <h3 class="page-subtitle"><span><?php the_title(); ?></span></h3> 
    <div id="post-<?php the_ID(); ?>" class="post">    
      <div class="post-content">
        <?php the_content() ?>
      </div>
    </div><!-- .post -->

  </div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?> 