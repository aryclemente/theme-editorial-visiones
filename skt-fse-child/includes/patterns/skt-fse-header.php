<?php
 /**
  * Title: Header
  * Slug: skt-fse/header
  * Categories: skt-fse
  */

  
return array(
	'title'      => __( 'Header', 'skt-fse' ),
	'categories' => array( 'skt-fse' ),
	'blockTypes' => array( 'core/template-part/skt-fse' ),
	'content'    => '<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#84a7c7"}},"className":"skt-fse-header","layout":{"type":"constrained","contentSize":"1200px"}} -->
  <header class="wp-block-group skt-fse-header has-background" style="background-color:#84a7c7;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px"><!-- wp:navigation {"ref":13,"textColor":"background","customBackgroundColor":"#84a7c7","icon":"menu","overlayBackgroundColor":"primary","overlayTextColor":"background","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0px"}},"fontSize":"medium","fontFamily":"poppins"} /-->
  
  <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
  <div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"20%","className":"skt-fse-header-logo"} -->
  <div class="wp-block-column skt-fse-header-logo" style="flex-basis:20%"><!-- wp:image {"align":"center","id":9,"width":126,"height":126,"sizeSlug":"large","linkDestination":"custom"} -->
  <figure class="wp-block-image aligncenter size-large is-resized"><img src="http://localhost/Editorial_Visiones/wp-content/themes/skt-fse-child/assets/images/logo.png" alt="" class="wp-image-9" width="126" height="126"/></figure>
  <!-- /wp:image --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"skt-fse-header-menu"} -->
  <div class="wp-block-column skt-fse-header-menu has-link-color" style="padding-right:0px;flex-basis:65%"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
  <div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"border":{"width":"0px","style":"none","radius":"0px"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px"></div>
  <!-- /wp:group -->
  
  <!-- wp:spacer {"height":"30px"} -->
  <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"><!-- wp:search {"label":"Buscar","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Buscar","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none","radius":"30px"}}} /--></div>
  <!-- /wp:group --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"15%","className":"skt-fse-header-btn"} -->
  <div class="wp-block-column skt-fse-header-btn" style="flex-basis:15%"><!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"><!-- wp:social-links {"openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"},"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-pill-shape","layout":{"type":"flex","justifyContent":"center"}} -->
  <ul class="wp-block-social-links is-style-pill-shape" style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);margin-left:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:social-link {"url":"wa.me/584122026808","service":"whatsapp"} /-->
  
  <!-- wp:social-link {"url":"info@editorialvisiones.com ","service":"mail"} /--></ul>
  <!-- /wp:social-links --></div>
  <!-- /wp:group --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns --></header>
  <!-- /wp:group -->'

);
