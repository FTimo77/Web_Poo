<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Contacto"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Contacto"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Contacto"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Contacto"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Contacto"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<script src="js/a188dd9533d302c43f3325a8695f5578-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9533d302c43f3325a8695f5578-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9533d302c43f3325a8695f5578" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f11456baf1f8bb710b520" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f133d7757a6e53cfb7300" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7ea9f5e22ebad291941ca3651d46409b_120x120_fit.webp?ts=1739236201"></a></div></div></div><div id="a188dd95094f128cc7ea186a9ce29da6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094f1565cd76132b1c2b90ba" class="wb_element wb-menu wb-prevent-layout-click wb-anim-entry wb-anim wb-anim-slide-in-top wb-menu-mobile" data-plugin="Menu" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
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
			'class' => 'wb_this_page_menu_item active wb-anim wb-anim-entry wb-anim-fade-in-top wb-anim wb-anim-zoom-in',
			'animTime' => 0.6,
			'animDelay' => 0,
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div><div id="a18b5b6ccc37000bf8f65036d16d3d8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a194dc006e83000637c21a54224c23df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_main_a188dd9533d302c43f3325a8695f5578" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f1753231d67bdc97490f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f18e33afc959dab80c1bf" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1">Contacto</h1>
</div><div id="a188dd95094f19982ad53b09d7b23982" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/c15af0596a861f62f46369e5c6b6266f_700x690_fit.png?ts=1739236201"></div></div></div></div></div><div id="a188dd95094f1a60c1d4eb604cd22f55" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/bottom%20wavy-ts1646123366.svg?ts=1739236201"></div></div></div><div id="a194f248298f0075b64b43f71fafb26c" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194f24829910026398e33f5df1cb34d" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/I848HdWjLMo?controls=1" frameborder="0"></iframe></div><div id="a194f248299500f930465c6449ff78bb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Aprende con Minecraft</h2>
</div><div id="a194f248a43a00acea758bea607f9290" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194f248a43f0089bbca77341021cd11" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Cursos Gratuitos en el Internet</h2>
</div><div id="a194f248a4450099c82671a1f107aef3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f248a44900413e80e58b25f9aa57" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f248a44e00c98e3bf756c78c5b08" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">Curso Programación Orientada a Objetos - Pildora Informática</p>
</div></div></div><div id="a194f248a45700f66219c302e4d62330" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.pildorasinformaticas.es/course/curso-poo-programacion-orientada-a-objetos/"><span>Ir al Cuso</span></a></div></div></div><div id="a194f248a46200c79ae948c3815cdc4b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a194f248a4650040928b8611134fcada" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194f248a46800963ef4bb34e0efaaf9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Recurso de Lectura Adicional</p>
</div></div></div><div id="a194f248a46d008bbfbf901326a99ce6" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://ellibrodepython.com/programacion-orientada-a-objetos-python"><span>Ir al Artículo</span></a></div></div></div></div></div><div id="a194f248c60c005346590574f3a20739" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" data-defer-load="Youtube" data-src="//www.youtube.com/embed/bblFTvuk4pY?controls=1" frameborder="0"></iframe></div></div></div><div id="a188dd95094f1be8cc333c63392f43f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f1c80928ae1de4924390c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f1df1ff75f0147541e411" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><strong>Contacto</strong>:</p>

<p class="wb-stl-normal" style="text-align: center;">Email: 2005maldonado@gmail.com</p>

<p class="wb-stl-normal" style="text-align: center;">Ambato</p>

<p class="wb-stl-normal" style="text-align: center;">Ecuador</p>

<p class="wb-stl-normal" style="text-align: center;"><a href="tel:+1 212 736 3100"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+593 993920506</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p>
</div></div></div></div></div><div id="a188dd95094f1e2cd96fed4996824cac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f1f48f7b08f1e761bc07b" class="wb_element wb-map wb-prevent-layout-click" data-plugin="GoogleMaps"><div class="wb_google_maps_overlay"><div>Get <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">API key from Google</a> and insert it to plugin properties to enable maps on your website.</div></div><script type="text/javascript">
				(function() {
					var resizeFunc = function() {
						var elem = $("#a188dd95094f1f48f7b08f1e761bc07b");
						var w = elem.width(), h = elem.height();
						elem.find("div > div:first").css("zoom", Math.max(0.5, Math.min(1, ((w * h) / 120000))));
					};
					$(window).on("resize", resizeFunc);
					resizeFunc();
				})();
			</script></div><div id="a188dd95094f208f98049d1e63b25c99" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f218cb866f912896b4157" class="wb_element" data-plugin="Form"><form id="a188dd95094f218cb866f912896b4157_form" class="wb_form wb_mob_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="6b90eb6b"><input type="hidden" name="wb_form_uuid" value="1541443e"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Nombre<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Nombre"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th>Email<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_1" required="required"></div></td></tr><tr class="area-row"><th>Mensaje<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Mensaje"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_2" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Submit</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "6b90eb6b") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("6b90eb6b", formValues, formErrors);
			<?php } ?>
			</script></div></div></div><div id="a188dd95094f22e6b64d962f0c15b37d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/top%20wavy-ts1646127834.svg?ts=1739236201"></div></div></div></div></div></div></div><div id="wb_footer_a188dd9533d302c43f3325a8695f5578" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f250bbac3b924f4eba6d5" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f26582dc536ddfbbd69db" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">+593 993920505</p>

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
