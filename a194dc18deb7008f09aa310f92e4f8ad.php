<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Programación Estructurada"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Programación Estructurada"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Programación Estructurada"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Programación Estructurada"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Programación Estructurada"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<script src="js/a194dc18deb7008f09aa310f92e4f8ad-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a194dc18deb7008f09aa310f92e4f8ad-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a194dc18deb7008f09aa310f92e4f8ad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f11456baf1f8bb710b520" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f133d7757a6e53cfb7300" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7ea9f5e22ebad291941ca3651d46409b_120x120_fit.webp?ts=1739236201"></a></div></div></div><div id="a188dd95094f128cc7ea186a9ce29da6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094f1565cd76132b1c2b90ba" class="wb_element wb-menu wb-prevent-layout-click wb-anim-entry wb-anim wb-anim-slide-in-top wb-menu-mobile" data-plugin="Menu" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
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
					'class' => 'wb-anim wb-anim-entry wb-anim-fade-in-none',
					'animTime' => 0.6,
					'animDelay' => 0,
					'children' => array()
				),
				(object) array(
					'id' => 5,
					'href' => 'Programación-Estructurada/',
					'name' => 'Programación Estructurada',
					'class' => 'wb_this_page_menu_item active wb-anim wb-anim-entry wb-anim-fade-in-none',
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
)); ?><div class="clearfix"></div></div><div id="a18b5b6ccc37000bf8f65036d16d3d8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a194dc006e83000637c21a54224c23df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_main_a194dc18deb7008f09aa310f92e4f8ad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daec000321c06c760a867707" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daec010829b3ba9e62f677ad" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed19ce350bcd3f686b437c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed00bb1730258776d910db" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1">Programación Estructurada</h1>
</div></div></div></div></div></div></div><div id="a194dc18daed1b9f6ddf2bef87d88b83" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed01f6b0a7f0c6436bacfb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Conceptos Básicos</h2>
</div><div id="a194dc18daed1c80d8d1ab6d95655a4b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed0215035ee375a02b7c1a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed03b63df70fe76b585519" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed0427074ae2ed83613481" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>1</strong></h3>
</div></div></div><div id="a194f21d2ea8004b3907c0314ff9e05e" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/Programaci%C3%B3n-Estructurada/#a194dc18daed0711eb46c581ddd91885"><span>Varibles</span></a></div></div></div><div id="a194dc18daed1e8e562f49053bf1762e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed05640cccac1628eca4c3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a194f21d3c880086b5545fd3f765b051" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/Programaci%C3%B3n-Estructurada/#a194dc18daed0fc07a089303fde813b7"><span>Condicionales</span></a></div></div></div><div id="a194dc18daee025ea5f72d1d7186e710" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed06e8a9acf16c1123b279" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a194f21d40bf007d43bd5e32dddf8ac3" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/Programaci%C3%B3n-Estructurada/#a194dc18daed1174eeffd5c36d7f269f"><span>Bucles</span></a></div></div></div></div></div><div id="a194f1e76835008e5fa3595ccd0a6f97" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f1e7683c002ff1e9d67678a013fc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a194f21d47c300e4896441bad174a3db" class="wb_element" data-plugin="Button"><a class="wb_button" href="http://poo.infy.uk/Programaci%C3%B3n-Estructurada/#a194f1ec1ad90024973ccde35806a327"><span>Funciones</span></a></div></div></div></div></div><div id="a194dc18daee031c9dc0a10aa6898a4e" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed0711eb46c581ddd91885" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Variables</h2>
</div><div id="a194dc18daed21d916ffedb7d9924a57" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed087bc8d1a410ecd57db0" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/image2-removebg-preview.png?ts=1739236201"></div></div></div><div id="a194dc18daed22ed822a058d1f00c0d6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed09e26a6f52ef8e5a9417" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">Una variable es un espacio en la memoria de la computadora que almacena un valor y puede cambiar durante la ejecución de un programa. Se identifica con un nombre y tiene un tipo de dato que define qué tipo de información puede guardar (números, texto, booleanos, etc.).</p>
</div></div></div></div></div></div></div><div id="a194dc18daee08aa6c591684a596b3ac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed0e409527cba5c3673921" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed0fc07a089303fde813b7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Condicionales</h2>
</div><div id="a194dc18daed27660b9e6aaca19fed3f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Los condicionales son estructuras de control que permiten ejecutar diferentes bloques de código según una condición lógica. Se basan en expresiones booleanas (verdadero o falso) y se utilizan para tomar decisiones dentro de un programa.</p>
</div><div id="a194f1e9be430091c2d9facdb7abaa87" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/images3-removebg-preview.png?ts=1739236201"></div></div></div></div></div></div></div><div id="a194dc18daee0afda15feb178bc8122e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed10f6f1066a9dad0d89b2" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed1174eeffd5c36d7f269f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Bucles</h2>
</div><div id="a194dc18daed28eaad99a926800b2bda" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194dc18daed120475eb924cd1a962aa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed294fd3390d3afc339a6d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><strong>Repetición automática     </strong> </p>

<p class="wb-stl-normal" style="text-align: center;">Un bucle permite ejecutar un bloque de código varias veces sin necesidad de escribirlo repetidamente.</p>
</div></div></div><div id="a194dc18daed2af4f5f4487ca0857de4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed14da8359f191ee0d8e16" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/6c781f46e2ff82f8ae6e05537ef96720_fit.png?ts=1739236201"></div></div></div><div id="a194dc18daed2bdac299764b3f48083e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><strong>Condiciones de control </strong>⚙️      Los bucles pueden repetirse un número fijo de veces (for) o hasta que se cumpla una condición (while, do-while).</p>
</div></div></div><div id="a194dc18daee065cd66ac864253e0e5a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed2c83ee527ddb27f4f25a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><strong>Optimización del código </strong>🚀      Evitan redundancia, mejoran la eficiencia y facilitan la manipulación de grandes volúmenes de datos.</p>
</div></div></div></div></div><div id="a194f1ec1ad200fd8710ad02567ceb6d" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194f1ec1ad90024973ccde35806a327" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Funciones</h2>
</div><div id="a194f1ec1ae0001a7024e3d2feeba625" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f1ec1aec0064fb2b39155723607c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f1ec1aee0029cce384cc99dfd761" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/24443f8cd54a9e05d130a530c4470dc3_540x360_fit.jpg?ts=1739236201"></div></div></div><div id="a194f1ec1af10029d22bb03e834ccebd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><strong>Reutilización de código:</strong> Una función es un bloque de código que realiza una tarea específica y puede ser llamado múltiples veces, mejorando la organización y eficiencia del programa.</p>
</div></div></div></div></div></div></div></div></div></div></div><div id="a194dc18daee0b5bdc56e7afbd5ec4d6" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dc18daed16cc9e52ecd28eb9a7dd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Regístrate</h2>
</div><div id="a194dc18daee00defc34c8d8c188b740" class="wb_element" data-plugin="Form"><form id="a194dc18daee00defc34c8d8c188b740_form" class="wb_form wb_mob_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="6b90eb6b"><input type="hidden" name="wb_form_uuid" value="fd6d8ecd"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Nombre<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Nombre"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th>Email<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_1" required="required"></div></td></tr><tr class="area-row"><th>Mensaje<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Mensaje"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_2" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Submit</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "6b90eb6b") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("6b90eb6b", formValues, formErrors);
			<?php } ?>
			</script></div></div></div><div id="a194dc18daee0c44c7549ef4411b1564" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/top%20wavy-ts1646127834.svg?ts=1739236201"></div></div></div></div></div><div id="wb_footer_a194dc18deb7008f09aa310f92e4f8ad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f250bbac3b924f4eba6d5" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f26582dc536ddfbbd69db" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">+593 993920505</p>

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
