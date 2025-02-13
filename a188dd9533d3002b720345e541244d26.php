<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Inicio"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Inicio"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Inicio"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Inicio"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Inicio"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<script src="js/a188dd9533d3002b720345e541244d26-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9533d3002b720345e541244d26-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9533d3002b720345e541244d26" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f11456baf1f8bb710b520" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f133d7757a6e53cfb7300" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7ea9f5e22ebad291941ca3651d46409b_120x120_fit.webp?ts=1739236201"></a></div></div></div><div id="a188dd95094f128cc7ea186a9ce29da6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094f1565cd76132b1c2b90ba" class="wb_element wb-menu wb-prevent-layout-click wb-anim-entry wb-anim wb-anim-slide-in-top wb-menu-mobile" data-plugin="Menu" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 1,
			'href' => '{{base_url}}',
			'name' => 'Inicio',
			'class' => 'wb_this_page_menu_item active wb-anim wb-anim-entry wb-anim-fade-in-top wb-anim wb-anim-zoom-in',
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
					'class' => 'wb-anim wb-anim-entry wb-anim-fade-in-none',
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
)); ?><div class="clearfix"></div></div><div id="a18b5b6ccc37000bf8f65036d16d3d8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a194dc006e83000637c21a54224c23df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_main_a188dd9533d3002b720345e541244d26" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e5576b527d84d0e9d0f78" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e5653e1cf190fb5c9069f" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a194dbcbd9a700ce7c3dcbf83a8b892f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/e32236edeb71a1d0f9b5a72f8f1f23d1_664x404_46x0_769x404_crop.jpg?ts=1739236201"></div></div></div><div id="a188dd95094e5861e80949fb07c701bc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e59d36153e6d445212093" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1">¡Aprende a Programar!</h1>
</div><div id="a188dd95094e5a69089f11c52b95fd6b" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacto/"><span>Contáctanos</span></a></div></div></div></div></div></div></div><div id="a188dd95094e5ca1d9bcbd788652b42f" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e5daa2141b9ddf02363bf" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">¿Qué es la programación?</h2>
</div><div id="a188dd95094e5e48550e5a6cb3477f0b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e5f164fd78da6d930e795" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e6044e4399c407967ebbc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e61befecb848eb21c58b6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>1</strong></h3>
</div></div></div><div id="a188dd95094e62d01c0b62d0b857c200" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Lógica y resolución de problemas</strong></h3>
</div></div></div><div id="a188dd95094e6307e0814704357320ce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e64209fde375009c01cef" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094e66a816e5f9f3d7bd87b0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Automatización y eficiencia</strong></h3>
</div></div></div><div id="a188dd95094e6706b239d48ecb260a30" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e68e34278ca2498dfa5b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094e6a34bc506e5f0eea662f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Creatividad e innovación</strong></h3>
</div></div></div></div></div></div></div><div id="a188dd95094e6b3acd2ac7770d0b6a12" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e6c2ac5d171c66ffc2c8d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Conoce más</h2>
</div><div id="a188dd95094e6d35a9321698646a35b8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e6e854a7938a9568421e9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/fc9effbf0b9e029de0a1a056053fc1bd_926x520_fit.jpg?ts=1739236201"></div></div></div><div id="a188dd95094e6f9c9d57036f4c0fa00e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e700a0344279d9cdecbd6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">La programación es el proceso de escribir instrucciones para que una computadora realice tareas específicas. Se basa en la creación de algoritmos, que son conjuntos de pasos lógicos diseñados para resolver problemas.</p>
</div></div></div></div></div></div></div><div id="a188dd95094e722de1c8f6fd45a4db6d" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e734e6a1dec429dfa4067" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e740f0796729ea1fd4d11" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="auto" viewBox="0 0 1921.02083 1793.982" style="direction: ltr; color:#7353be"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd95094e7565ed396e1bba795ca0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(115,83,190,1);">Python</span></h2>
</div></div></div><div id="a188dd95094e77d9b52e0e3ab84b77a7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e788b046dfedd8d0fc7c2" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#eec531"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd95094e79b42b7a490ac226a778" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(238,197,49,1);">Java</span></h2>
</div></div></div><div id="a188dd95094e7be63e210fd2f72cb8f1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e7cd77d50bcaa9c18fe01" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="auto" viewBox="0 0 1921.02083 1793.982" style="direction: ltr; color:#b3d3ab"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd95094e7d09b1276aa195feba49" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(179,211,171,1);">C++</span></h2>
</div></div></div></div></div><div id="a188dd95094e7f5f75491efb4a771f98" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e8021dc8e2efe3f6696b5" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e81b9b5ea6f0c56b93947" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Lógica</h2>
</div><div id="a188dd95094e823b8c649d3114ed44c7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Uno de los principios fundamentales en la programación es la lógica, que permite estructurar el código de manera clara y eficiente. Además, se apoya en conceptos clave como variables, estructuras de control (condiciones y bucles), funciones y estructuras de datos.</p>
</div><div id="a188dd95094e8344c30207e8137f6824" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacto/"><span>Contacto</span></a></div></div></div></div></div><div id="a188dd95094e845223059fc78fb45dc6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e858ae6a7e7c697a7f705" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e864641cce7c42249eee2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Programar... ¿Es Importante?</h2>
</div><div id="a188dd95094e876864d84440a83f2010" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e8877d923f98ea9b82dcb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e8957ce0048d8311d2e64" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/767784c07c972f985e9e0dfcb34bf6a1_540x540_fit.png?ts=1739236201"></div></div></div><div id="a188dd95094f00cab4381fc8d646862e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">"La programación no es solo escribir código, es crear soluciones."</p>
</div></div></div><div id="a188dd95094f012949e8289188cc65c6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f021535821cb3a297f224" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/60326f3b9137cde6664940aeb2b25c0e_540x540_fit.png?ts=1739236201"></div></div></div><div id="a188dd95094f03c06819379bae49ead1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">"El software mueve el mundo, y la programación lo construye."</p>
</div></div></div><div id="a188dd95094f0415027e8b157e68c741" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f05b97bdcce1d91f9f52e" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/9e7d2d8eec5b1a8d7305c9164ccc729c_612x432_fit.jpg?ts=1739236201"></div></div></div><div id="a188dd95094f0663267b19c45f46a8a8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">"Cada línea de código es un paso hacia el futuro."</p>
</div></div></div></div></div></div></div></div></div><div id="a188dd95094f0a09d1949abebe9807f8" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f0b59695fa33b553ac9c1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Regístrate</h2>
</div><div id="a188dd95094f0c179f172652a963ad8a" class="wb_element" data-plugin="Form"><form id="a188dd95094f0c179f172652a963ad8a_form" class="wb_form wb_mob_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="6b90eb6b"><input type="hidden" name="wb_form_uuid" value="fd6d8ecd"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Nombre<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Nombre"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th>Email<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_1" required="required"></div></td></tr><tr class="area-row"><th>Mensaje<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Mensaje"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_2" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Submit</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "6b90eb6b") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("6b90eb6b", formValues, formErrors);
			<?php } ?>
			</script></div></div></div><div id="a188dd95094f0d45583aa4adf518f950" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/top%20wavy-ts1646127834.svg?ts=1739236201"></div></div></div></div></div><div id="wb_footer_a188dd9533d3002b720345e541244d26" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f250bbac3b924f4eba6d5" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f26582dc536ddfbbd69db" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">+593 993920505</p>

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
