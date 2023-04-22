<?php
/**
 * Info Boxes
 */
return array(
	'title'      => __( 'Info Boxes', 'skt-fse' ),
	'categories' => array( 'skt-fse' ),
	'blockTypes' => array( 'core/template-part/skt-fse' ),
	'content'    => '
	
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"background","className":"skt-fse-sec skt-fse-section2","layout":{"type":"constrained","contentSize":"1230px"}} -->
<section class="wp-block-group skt-fse-sec skt-fse-section2 has-background-background-color has-background" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"25px"}}}} -->
<div class="wp-block-columns" style="padding-bottom:25px"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textAlign":"center","level":5,"style":{"color":{"text":"#6458ef"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-center has-text-color has-poppins-font-family" style="color:#6458ef;padding-top:0px;padding-bottom:0px;font-size:18px;font-style:normal;font-weight:600;text-transform:capitalize">Formación Educativa</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#0a1d2d"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"15px","bottom":"30px"}}},"fontFamily":"poppins"} -->
<h1 class="wp-block-heading has-text-align-center has-text-color has-poppins-font-family" style="color:#0a1d2d;padding-top:15px;padding-bottom:30px;font-size:40px;font-style:normal;font-weight:700">Eventos Academicos</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"tagName":"main"} -->
<main class="wp-block-group"><!-- wp:query {"queryId":32,"query":{"perPage":6,"pages":0,"offset":0,"postType":"evento","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-query"><!-- wp:post-template {"backgroundColor":"background","fontSize":"large"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"35px","bottom":"50px","left":"35px"}},"color":{"background":"#eff5fa"},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#eff5fa;padding-top:50px;padding-right:35px;padding-bottom:50px;padding-left:35px"><!-- wp:post-featured-image {"isLink":true,"width":"300px","height":"300px","dimRatio":10,"align":"center","style":{"color":{"duotone":"unset"},"border":{"radius":"45px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-title {"textAlign":"center","level":1,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"23px"},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"fontSize":"medium"} /-->

<!-- wp:read-more {"linkTarget":"_blank","style":{"border":{"width":"0px","style":"none","radius":"25px"},"color":{"gradient":"linear-gradient(135deg,rgb(119,183,221) 0%,rgb(171,113,225) 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"textColor":"background","fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons alignfull" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"textAlign":"center","textColor":"background","width":50,"style":{"color":{"gradient":"linear-gradient(334deg,rgb(73,179,241) 0%,rgb(200,165,235) 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-background-color has-text-color has-background has-text-align-center wp-element-button" href="http://localhost/Editorial_Visiones/eventos-academicos/" style="border-radius:20px;background:linear-gradient(334deg,rgb(73,179,241) 0%,rgb(200,165,235) 100%);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">Todos los Eventos Académicos</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->',
);
