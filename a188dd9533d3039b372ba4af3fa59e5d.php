<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Aprende"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Aprende"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Aprende"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Aprende"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Aprende"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<script src="js/a188dd9533d3039b372ba4af3fa59e5d-bundle.js?ts=20250211031001" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9533d3039b372ba4af3fa59e5d-bundle.css?ts=20250211031001" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9533d3039b372ba4af3fa59e5d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f11456baf1f8bb710b520" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f133d7757a6e53cfb7300" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7ea9f5e22ebad291941ca3651d46409b_120x120_fit.webp?ts=1739236201"></a></div></div></div><div id="a188dd95094f128cc7ea186a9ce29da6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a188dd95094f1565cd76132b1c2b90ba" class="wb_element wb-menu wb-prevent-layout-click wb-anim-entry wb-anim wb-anim-slide-in-top wb-menu-mobile" data-plugin="Menu" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
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
			'class' => 'wb_this_page_menu_item active wb-anim wb-anim-entry wb-anim-fade-in-top wb-anim wb-anim-zoom-in',
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
)); ?><div class="clearfix"></div></div><div id="a18b5b6ccc37000bf8f65036d16d3d8c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a194dc006e83000637c21a54224c23df" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_main_a188dd9533d3039b372ba4af3fa59e5d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e027a4db5afd8f15d4bed" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e038baabfcc5b254eb4b6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1">Aprendamos Juntos</h1>
</div><div id="a188dd95094e04cd3ed3452cbbae3716" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/b983f5080813d2aabd47a9e3bb15dbeb_800x496_fit.jpg?ts=1739236201"></div></div></div></div></div><div id="a188dd95094e05da871f24a4c9d1de1c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/bottom%20wavy-ts1646123366.svg?ts=1739236201"></div></div></div><div id="a188dd95094e062aa9d7a94ba0723189" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e0706e72aaa7d513e707a" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e08b9bccfb6f2225cddef" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Programación Estructurada</h2>
</div><div id="a188dd95094e09ee23521ab85535d876" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Programación Estructurada es un paradigma de programación basado en el uso de estructuras de control bien definidas (secuencia, selección e iteración) para mejorar la claridad, mantenimiento y eficiencia del código.</p>
</div><div id="a188dd95094e0a1fe4e0db89253977d8" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacto/"><span>Contacts</span></a></div></div></div></div></div><div id="a194dc0fc0430083d86a50bf80d6aa04" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a194dc0fc05000381bcc6d0de516ad61" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Programación Orientada a Objetos (POO)</h2>
</div><div id="a194dc0fc057005508f5e234555cc323" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Programación Orientada a Objetos (POO) es un paradigma de programación basado en la organización del código en objetos, que combinan datos (atributos) y comportamientos (métodos).</p>
</div><div id="a194dc0fc05d00113eae7d14d8efb8d7" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacto/"><span>Contacts</span></a></div></div></div><div id="a188dd95094e0b4b1fc208b9e4cb36fc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e2677b1bb62b468066185" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e2f0aa20001029b5cb015" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094e30a01f4d523645a92228" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094e319335c2114b0295064d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="65.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div></div></div><div id="a188dd95094e322f9584578039fde341" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><strong>Continúa aprendiendo con Recursos Adicionales</strong></h3>
</div></div></div><div id="a194dc1425f4002ee1fd25905bf2fbd3" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacto/"><span>Recursos</span></a></div></div></div></div></div><div id="a188dd95094e3307b29dfb10074cf436" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/top%20wavy-ts1646127834.svg?ts=1739236201"></div></div></div></div></div><div id="wb_footer_a188dd9533d3039b372ba4af3fa59e5d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd95094f250bbac3b924f4eba6d5" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd95094f26582dc536ddfbbd69db" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">+593 993920505</p>

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
