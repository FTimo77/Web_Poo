<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "POO"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "POO"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "POO"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "POO"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "POO"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<script src="js/a194dbfb39cd0068f6310825c6454b13-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a194dbfb39cd0068f6310825c6454b13-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a194dbfb39cd0068f6310825c6454b13" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f11456baf1f8bb710b520" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f133d7757a6e53cfb7300" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7ea9f5e22ebad291941ca3651d46409b_120x120_fit.webp?ts=1739236201"></a></div></div></div><div id="a188dd95094f128cc7ea186a9ce29da6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094f1565cd76132b1c2b90ba" class="wb_element wb-menu wb-prevent-layout-click wb-anim-entry wb-anim wb-anim-slide-in-top wb-menu-mobile" data-plugin="Menu" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 1,
			'href' => '{{base_url}}',
			'name' => 'Inicio',
			'class' => 'wb-anim wb-anim-entry wb-anim-fade-in-top wb-anim wb-anim-zoom-in',
			'animTime' => 0.6,
			'animDelay' => 0,
			'children' => array()
		),
		(object) array(
			'id' => 2,
			'href' => 'Aprende/',
			'name' => 'Aprende',
			'class' => 'wb-anim wb-anim-entry wb-anim-fade-in-top wb-anim wb-anim-zoom-in',
			'animTime' => 0.6,
			'animDelay' => 0,
			'children' => array(
				(object) array(
					'id' => 4,
					'href' => 'POO/',
					'name' => 'POO',
					'class' => 'wb_this_page_menu_item active wb-anim wb-anim-entry wb-anim-fade-in-none',
					'animTime' => 0.6,
					'animDelay' => 0,
					'children' => array()
				),
				(object) array(
					'id' => 5,
					'href' => 'Programación-Estructurada/',
					'name' => 'Programación Estructurada',
					'class' => 'wb-anim wb-anim-entry wb-anim-fade-in-none',
					'animTime' => 0.6,
					'animDelay' => 0,
					'children' => array()
				)
			)
		),
		(object) array(
			'id' => 3,
			'href' => 'Contacto/',
			'name' => 'Contacto y Recursos Adicionales',
			'class' => 'wb-anim wb-anim-entry wb-anim-fade-in-top wb-anim wb-anim-zoom-in',
			'animTime' => 0.6,
			'animDelay' => 0,
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div><div id="a18b5b6ccc37000bf8f65036d16d3d8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a194dc006e83000637c21a54224c23df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_main_a194dbfb39cd0068f6310825c6454b13" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a00aeaec57c242bcca5bf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dbfb346a01d8afe928288e28239e" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a194dbfb346a19d176ac6bb779b7e2c9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/e32236edeb71a1d0f9b5a72f8f1f23d1_664x404_46x0_769x404_crop.jpg?ts=1739236201"></div></div></div><div id="a194dbfb346a1b58953389928a3c269c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a029dfdfefceb7280c997" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1">Programación Orientada a Objetos</h1>
</div></div></div></div></div></div></div><div id="a194dbfb346a1d423cd2d1793a9c3238" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a03214057fb18e7782300" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Conceptos Clave</h2>
</div><div id="a194dbfb346a1e8f6cdccd77b6a59124" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dbfb346a043ea06b67dda53144d2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a05ae5af1ec99b833108b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dbfb346a060332659003655770b2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>1</strong></h3>
</div></div></div><div id="a194f1ef076d00cd466a73330a44b448" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/POO/#a194dbfb346b1035b2d05f4106086148"><span>Clases y Objetos</span></a></div></div></div><div id="a194f1f896f400d45fcbc8ac884a6254" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f1f896fc000f6dbd0b05adef202c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f1f8970300e67851db2e7d40a2b9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>1</strong></h3>
</div></div></div><div id="a194f1f89707004a879b63d1a2358876" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/POO/#a194dbfb346a11a9cc2e7481f3540fda"><span>Herencia</span></a></div></div></div><div id="a194f1f8a86900c81fcae17d0db0cbdd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f1f8a87100c3df85a483726c8bd4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f1f8a87600869d023583cb411c32" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>1</strong></h3>
</div></div></div><div id="a194f1f8a880009e889bb4cc82b2aaf8" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/POO/#a194f209353f0022addc7a02d6e38033"><span>Encapsulamiento</span></a></div></div></div></div></div><div id="a194f1f97a9500c0cd29b157fb76a576" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f1f97a98008131a0f846a2950400" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f1f97a9a004e1959fc673dfcfe13" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f1f97a9c00537fe91e885355461f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>1</strong></h3>
</div></div></div><div id="a194f1f97aa60088d3dfe2ab38221af3" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/POO/#a194f20c7bc600f7ed035e88eab03b48"><span>Polimorfismo</span></a></div></div></div></div></div></div></div><div id="a194dbfb346b1035b2d05f4106086148" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a09ee748d5b14f94f65d4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong>Clases y Objetos</strong></h2>
</div><div id="a194dbfb346b015d62ad054b64b2dede" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f201d8f40023c0a570b789a6f9da" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a0a131bbdee2f15016f25" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/a5c4c92d07623f7b3b1e354938c64413_926x694_fit.jpg?ts=1739236201"></div></div></div></div></div><div id="a194dbfb346b0234f27eda6c4c0e9393" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a0bf139743d88e5f0297e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Clases: </strong>Son plantillas o estructuras que definen las características (atributos) y comportamientos (métodos) que los objetos de esa clase tendrán. En otras palabras, la clase es un plano o molde para crear objetos.  </p>

<p class="wb-stl-normal"><strong>Objetos:</strong> Son instancias de una clase. Representan entidades concretas que tienen valores específicos para los atributos definidos en la clase y pueden ejecutar los métodos que la clase proporciona.</p>
</div></div></div></div></div><div id="a194f20245f3008a644ab55f81523f10" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">En el ejemplo propuesto a continuación tenemos que existe una clase llamada "Auto" y los objetos a continuación determinan colores, forma, modelo, etc.</p>
</div><div id="a194f20287ad009503921b195d338744" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4b8b53b1808741da7d18bf3c8babb07c_926x948_fit.png?ts=1739236201"></div></div></div></div></div><div id="a194dbfb346b155916105e82481bfc7e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dbfb346a10e3ce3b2cdae1818bad" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a11a9cc2e7481f3540fda" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Herencia</h2>
</div><div id="a194dbfb346b0753ecfc32fdc26bfe21" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">La herencia es un principio fundamental de la programación orientada a objetos que permite a una clase (llamada subclase o clase derivada) heredar atributos y métodos de otra clase (llamada superclase o clase base). Esto facilita la reutilización de código, ya que las subclases pueden aprovechar las funcionalidades de la superclase sin tener que escribirlas de nuevo.</p>
</div><div id="a194f207b2a9001055fb7661d0b6dbf5" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/images.png?ts=1739236201"></div></div></div></div></div></div></div><div id="a194dbfb346b17488917d3808663d35e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f209353700e288b8dc2875a902fd" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194f209353f0022addc7a02d6e38033" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Encapsulamiento</h2>
</div><div id="a194f209354d00afa78f856ae7c34fdc" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4f69dfc394dc6260374715370d9ccec1_504x284_fit.jpg?ts=1739236201"></div></div></div><div id="a194f20935470090c96ba85c35376bb9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">El encapsulamiento es el principio de ocultar los detalles internos de una clase y exponer solo lo necesario. Se logra mediante el uso de modificadores de acceso (public, private, etc.) para proteger los atributos y métodos, asegurando que solo se accedan y modifiquen de manera controlada. Esto mejora la seguridad y mantenibilidad del código.</p>
</div><div id="a194f20cb5f600175d5b1670e3407bdb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><strong>Polimorfismo</strong></h2>
</div></div></div><div id="a194f20c7bab00f958733487eec576bb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f20c7bb60062fa93c9d5aba83485" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f20c7bba00702ac6fdd86b1e5286" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/imagees.png?ts=1739236201"></div></div></div></div></div><div id="a194f20c7bc30008cf3e4f692ef168cb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f20c7bc600f7ed035e88eab03b48" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">El polimorfismo es el principio que permite que una misma interfaz (método o función) pueda ser utilizada por objetos de diferentes clases. En otras palabras, diferentes clases pueden tener métodos con el mismo nombre pero con comportamientos diferentes, dependiendo del tipo de objeto que los invoque.</p>
</div></div></div></div></div></div></div><div id="a194dbfb346b183f4d0dc7bcaa0139fe" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dbfb346a18fe6c0f659142cc5515" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Regístrate</h2>
</div><div id="a194dbfb346b0d0bf05382c11838ff3e" class="wb_element" data-plugin="Form"><form id="a194dbfb346b0d0bf05382c11838ff3e_form" class="wb_form wb_mob_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="6b90eb6b"><input type="hidden" name="wb_form_uuid" value="fd6d8ecd"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Nombre<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Nombre"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th>Email<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_1" required="required"></div></td></tr><tr class="area-row"><th>Mensaje<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Mensaje"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_2" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Submit</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "6b90eb6b") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("6b90eb6b", formValues, formErrors);
			<?php } ?>
			</script></div></div></div><div id="a194dbfb346b190b337347a1c22ce4e7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/top%20wavy-ts1646127834.svg?ts=1739236201"></div></div></div></div></div><div id="wb_footer_a194dbfb39cd0068f6310825c6454b13" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f250bbac3b924f4eba6d5" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f26582dc536ddfbbd69db" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">+593 993920505</p>

<p class="wb-stl-footer" style="text-align: center;">Ambato</p>

<p class="wb-stl-footer" style="text-align: center;">Ecuador</p>
</div><div id="a188dd95094f27d7c055c4abf10d4a4e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f283c161d9d7d198598ae" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2025 <a href="http://poo.infy.uk">poo.infy.uk</a></p>
</div><div id="a188dd95094f29680aced9a32a1205fd" class="wb_element wb-prevent-layout-click" data-plugin="LinkExchangeBadge"><div class="wb-stl-footer">Member of <i class="icon-wb-logo"></i><a href="https://site.pro/" target="_blank" title="Site.pro Website builder">Site.pro</a></div></div></div></div><div id="a188dd95094f2ab60570d5a388e9e2a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f2bd3515f1708099899c5" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dd95094f2cad1a33009be7ce3512" class="wb_element wb_element_picture" data-plugin="Picture" title="https://twitter.com/twitter"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div><div id="a188dd95094f2d223eec77fb8dbea27e" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/instagram/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
