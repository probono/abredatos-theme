	</div><!-- #container -->
	
	<div id="footer_push"></div>

</div><!-- #wrapper -->

<script>
  function fbs_click(){
    u=location.href;
    t=document.title;
    window.open('http://www.facebook.com/sharer.php?u='+
                 encodeURIComponent(u)+
                 '&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=760,height=436');
    return false;
  }
</script>

<div id="footer">
  <div id="footer_content">

    <div id="footer_share">
      <div id="footer_share_content">
        CUÉNTASELO A TODO EL MUNDO <span class="spacer">|</span>
        <a href="mailto:?subject=¡Yo también quiero datos abiertos!&body=Colabora con el Desafío AbreDatos 2010 http://www.abredatos.es" class="footer_share_link share_mail">mail</a>
        <a href="http://twitter.com/home?status=¡Yo también quiero datos abiertos! Colabora con el Desafío @AbreDatos 2010 http://www.abredatos.es" class="footer_share_link share_twitter" target="_blank">twitter</a>
        <a rel="nofollow" href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" class="footer_share_link share_facebook" target="_blank">facebook</a>
      </div>
    </div> <!-- /#footer_share --> 
    
    <div id="footer_partners">
        <div id="footer_organizador">
          <div class="title">Organiza:</div>
          <br />
          <a href="http://www.probp.org">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/logo_probono.png" alt="Pro Bono Público - Asociación para la promoción y difusión de recursos públicos" />
          </a>
        </div>
        <div id="footer_patrocinadores">
          <div class="title">Patrocina:</div>
          <ul class="plata">
            <li><a href="http://euskadi.net"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/patrocinadores/gv.png" alt="" /></a></li>
          </ul>
          <ul class="bronce">            
            <li><a href="http://derecho.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/patrocinadores/derechocom.png" alt="" /></a></li>
            <li><a href="http://ideup.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/patrocinadores/ideup.png" alt="" /></a></li>
            <li><a href="http://www.aecem.org"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/patrocinadores/aecem.png" alt="" /></a></li>
            <li><a href="http://aspgems.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/patrocinadores/aspgems.png" alt="" /></a></li>
            <!-- <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/patrocinadores/tu.png" alt="Tú puedes patrocinar el desafío Abre Datos 2010" /></a></li> -->
            <!-- <li><a href="/patrocina"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/layout/__167x167.png" alt="" /></a></li> -->
          </ul>
        </div>
    </div> <!-- /#footer_partners --> 
    
    <div id="footer_links">
      <div id="footer_links_content">
        <span class="author">Diseño: <a href="http://www.bienaventurado.net">www.bienaventurado.net</a></span>
        <a href="mailto:info@abredatos.es" class="footer_menu_link link_contact">Contacto</a> |
        <a href="/dudas" class="footer_menu_link link_help">Ayuda</a> |
        <a href="#" id="footer_participa">Participa</a>
      </div>
    </div> <!-- /#footer_links --> 
    
    </div>
	</div><!-- #footer -->



<?php wp_footer() ?>

</body>
</html>