<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Comments RSS Feed" href="<?php bloginfo('comments_rss2_url') ?>"  />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head() ?>

</head>

<body>

<div id="wrapper">

  <div id="logo"><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/logo.png" alt="<?php bloginfo('name'); ?>" /></a></div>

  <div id="menu">
    <ul>         
      <li><a href="/">Home</a></li>
      <?php wp_list_pages('title_li=&depth=1'); ?>
    </ul>
    <a id="menu_participa" href="#"><strong>Participa</strong></a>
  </div>


<?php // modulos  ?>

  <?php if (is_single() OR is_page()): ?>
    <div class="header_description">Haz de tu gobierno una entidad mejor, más <strong>transparente y creativa.</strong> Y de paso hazte famoso y consigue algo de dinero.</div>
  <?php else: ?>
    <div class="header_description">El <strong>Desafío AbreDatos 2010</strong> es un concurso de 48 horas para el desarrollo exprés de servicios tecnológicos al ciudadano basados en el uso de datos públicos.</div>
    <div class="mainareas">
      <ul>
        <li>
          <h2 class="title">ABRE DATOS</h2>
          <div class="subtitle">Los datos públicos deben ser abiertos</div>
          <div class="more"><a href="/acerca-de/#objetivos" class="ico ico_round_arrow">Descubre por qué</a></div>
        </li>
        <li class="active">
          <h2 class="title">TRABAJO EN EQUIPO</h2>
          <div class="subtitle">Si eres desarrollador, diseñador, marketing... convence a tus amigos o encuentra compañeros</div>
          <div class="more"><a href="/participa" class="ico ico_round_arrow">+info</a></div>
        </li>
        <li>
          <h2 class="title">PARTICIPA</h2>
          <div class="subtitle">Participa y demuestra la utilidad de disponer de dato</div>
          <div class="more"><a href="/participa" class="ico ico_round_arrow">+info</a></div>
        </li>
      </ul>
    </div>
  <?php endif ?>               

  <div id="container">

