<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Home"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

			<script src="js/common-bundle.js?ts=20240825205706" type="text/javascript"></script>
	<script src="js/a188dd98b81a00c9e8c8f6ad0daafe83-bundle.js?ts=20240825205706" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240825205706" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd98b81a00c9e8c8f6ad0daafe83-bundle.css?ts=20240825205706" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd98b81a00c9e8c8f6ad0daafe83" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a73512bd09dd8ff1364d2d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19180c16f0c00653751a5d1662935a2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19180c121d60077fafbbb3b6c0665da" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/ec320b846e34067748efd733548894de_432x330_fit.png?ts=1724608626"></div></div></div><div id="a188dd98a2a73974dd31b1a326a96e69" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class="wb_this_page_menu_item"><a href="{{base_url}}">Home</a></li><li class=""><a href="Contacts/">Contacts</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a188dd98b81a00c9e8c8f6ad0daafe83" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a70ed87bbc38167681c49d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a70f8c753c0d04141a6776" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a710b0b2f8ee87ecf740b6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><font color="#ffffff">Hydrogen Cloud</font></h1>
</div><div id="a188dd98a2a7111b10dd3be4ab8006d6" class="wb_element" data-plugin="Button"><a class="wb_button"><span>Plans</span></a></div></div></div></div></div><div id="a188dd98a2a712f087b38dd64a00cf04" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1918a8160ae009fff58674f07e011b2" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1918a8160b20018cb02dfd4c1149619" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a1918a8160b300c5f824e7ab4d423ace" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/45e546b2e61008131830e10f520a8a15_fit.png?ts=1724608626"></div></div></div></div></div><div id="a1918a8160b80059e10165e153c70686" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1918a8160ba00ade968ba849451dbeb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">       Grass Plan</h3>
</div><div id="a1918a8160bd00ea8489e967e502f47a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom7"> 2$</h1>
</div><div id="a1918a8160bf0090a5602135df233883" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>4GB Ram </b></span></font></font></p>

<p style="text-align:center"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>10GB Disk</b></span></font></font></p>

<h3 class="wb-stl-heading3" style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>CPU 100%</b></span></font></font></h3>
</div><div id="a1918a8160c200f4348a6da0f781552f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div><div id="a188dd98a2a718a56fe6cb16659a4f29" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-top wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1918a7eb6c800799cf9cdfc6d6410a9" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-top wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a1918a76d8a100c898b8ecc28c66da78" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/coal.webp?ts=1724608626"></div></div></div></div></div><div id="a1918311f2fd00261cf7bd136aaee63f" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-top wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a71a0eeb6c31639e44b255" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a71b2656ceaa0c2f36f411" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">        Coal Plan</h3>
</div><div id="a188dd98a2a71c976fa791a1d51463f5" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom7">    5$   </h1>
</div><div id="a1918312aab2009214b6830eb854bb2a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p><span class="wb-stl-custom4">           6GB Ram </span></p>

<p><span class="wb-stl-custom4">         20GB Disk</span></p>

<p style="text-align: center; "><font color="#5d5d5d" face="Roboto, Arial, sans-serif"><span style="font-size: 20px;"><b>        CPU 200%</b></span></font></p>
</div></div></div></div></div></div></div><div id="a188dd98a2a71d25010b6cc85c4af25d" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1918a761aa100d8fa5c5c358ffad471" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/gold.webp?ts=1724608626"></div></div></div><div id="a188dd98a2a720c54f2102495c9820ea" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">             Gold Plan     </h3>
</div><div id="a1918a7c24c500039ed33c2dc2be22da" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a1918a7c246f0068e44c2eb2fdac2b20" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom7">       7$</h1>
</div><div id="a1918a746f5f000845b8530341965815" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a1918a79c64a00b420310021cb822a3e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><font color="#5d5d5d" face="Roboto, Arial, sans-serif"><span style="font-size: 20px;"><b>            8GB Ram </b></span></font></p>

<p style="text-align: center;"><font color="#5d5d5d" face="Roboto, Arial, sans-serif"><span style="font-size: 20px;"><b>          30GB Disk</b></span></font></p>

<p style="text-align: center;"><font color="#5d5d5d" face="Roboto, Arial, sans-serif"><span style="font-size: 20px;"><b>          CPU 300%</b></span></font></p>
</div><div id="a188dd98a2a71fa514a8b998c24ebc9c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a7219666462262cc920dc4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"></div></div></div></div></div></div></div></div></div><div id="a1918a80067400a13bc5a35cecad8d97" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1918a80d5a400748e8dd30fb40ac918" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1918a80d5b1008a97442e9099ad4ec4" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a1918a830ed100ca2165710d02996415" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/emerald.webp?ts=1724608626"></div></div></div></div></div><div id="a1918a80d5bd00336d25e84a30ccce7b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1918a80d5bf005b29d198d62a17376f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">       Emerald Plan</h3>
</div><div id="a1918a80d5c3005d768fee9d81584daf" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom7"> 9$</h1>
</div><div id="a1918a80d5c700d5854969d0dddca5f6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>10GB Ram </b></span></font></font></p>

<p style="text-align:center"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>40GB Disk</b></span></font></font></p>

<h3 class="wb-stl-heading3" style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>CPU 400%</b></span></font></font></h3>
</div><div id="a1918a80d5ca002f4aaf6378c85220bc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div><div id="a1918a8bcee10085690991186fa92d9b" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1918a8bcee800c6bba79378be9c20a9" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a1918a8caada0096798256add46662f3" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/zombies.webp?ts=1724608626"></div></div></div></div></div><div id="a1918a8bcef20056d59803baedeec286" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1918a8bcef400e500fa14f957a7a7ff" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">        Custom Plan</h3>
</div><div id="a1918a8bcef800fdc949dd05ac169f02" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom7"> ???$</h1>
</div><div id="a1918a8bcf02007b4b842497a5526bd2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>??GB Ram </b></span></font></font></p>

<p style="text-align:center"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>???GB Disk</b></span></font></font></p>

<h3 class="wb-stl-heading3" style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>CPU ????%</b></span></font></font></h3>
</div><div id="a1918a8bcf05008f2e9a51673e1e3a88" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div><div id="a1918a846e9800bae04e4a35e7e44295" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1918a846ea0005806f7c76f6fbe53b8" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-bottom wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a1918a88dc3c00e3f6c33946cf873dfe" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/obsidian.webp?ts=1724608626"></div></div></div></div></div><div id="a1918a846eaa0077eb2beaba24faabfc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1918a846ead00931cbcb8a3428d2769" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">      Obsidian Plan</h3>
</div><div id="a1918a846eb2005d78be9c010deb14ce" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom7"> 10$</h1>
</div><div id="a1918a846eb500f9e04b91ca83d997a7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>16GB Ram </b></span></font></font></p>

<p style="text-align:center"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>50GB Disk</b></span></font></font></p>

<h3 class="wb-stl-heading3" style="text-align: center;"><font color="#5d5d5d"><font face="Roboto, Arial, sans-serif"><span style="font-size:20px"><b>CPU 600%</b></span></font></font></h3>
</div><div id="a1918a846eb900d68b0a68641d023f15" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div><div id="a1918a80066100d97bf768f0897749ef" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1918a94567000bdbeafc259c9b7859f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom8">About Us?</h4>
</div><div id="a1918a95280e00554e2165848591d5f4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">We Offer DDOS Protected Servers And Premium Quality 24/7 No Lag Minecraft Servers,VPS.. More Soon...</h3>
</div></div></div></div></div><div id="a188dd98a2a7225321af043bf83621b9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a723e82b7f13c5d03f5ad3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Why us?</h2>
</div><div id="a188dd98a2a724181a400c5777e0cbfc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a72545525799386a407ae8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a726c4b7786a00d8f380f6" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1921.02083" height="1793.982" viewBox="0 0 1921.02083 1793.982" style="direction: ltr; color:#efad35"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd98a2a727fb8e97f4a182f650d7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">2562</h3>

<p class="wb-stl-normal" style="text-align: center;">Happy clients</p>
</div></div></div><div id="a188dd98a2a72816d4598ddc3c09c36c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a7297660f5d2c37efdd176" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/4edede27da2de2e6981988909c9ea1eb_fit.webp?ts=1724608626"></div></div></div><div id="a188dd98a2a72ab5cef976293da6a902" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">100+</h3>

<p class="wb-stl-normal" style="text-align: center;">Services</p>
</div></div></div><div id="a188dd98a2a72bfc05215e4d846ba59b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a72cda85f85d319c2591d9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#efad35"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd98a2a72d7516b70034117ba8c5" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">400+</h3>

<p class="wb-stl-normal" style="text-align: center;">Members</p>
</div></div></div><div id="a188dd98a2a72e20201822120f040992" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a72f70bb30c98d907a09e6" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="2305.02083" height="1793.982" viewBox="0 0 2305.02083 1793.982" style="direction: ltr; color:#efad35"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd98a2a73065e0473aff1c3be632" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">99.9%</h3>

<p class="wb-stl-normal" style="text-align: center;">Company  Gurantee</p>
</div></div></div></div></div><div id="a188dd98a2a731823b14043252c8b96a" class="wb_element" data-plugin="Button"><a class="wb_button" href="Contacts/"><span>Contact us</span></a></div></div></div></div></div><div id="wb_footer_a188dd98b81a00c9e8c8f6ad0daafe83" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd98a2a74be7fa7a0c31eeec7580" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a74cd977a4a787ba5597e3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a74d6fa26602c4168040d9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/ec320b846e34067748efd733548894de_180x138_fit.png?ts=1724608626"></a></div></div></div><div id="a188dd98a2a74e40169478d0fc51ab97" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><font color="#efad35">Hydrogen Cloud</font></h4>
</div></div></div><div id="a188dd98a2a75019fb2cebd0bb1f2082" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd98a2a75218bc8b94fb4f5ce623" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="Contacts/"><img loading="lazy" alt="" src="gallery_gen/6bd87b1347f93b21e548bd54aff426a9_60x60_fit.png?ts=1724608626"></a></div></div></div></div></div></div></div><div id="a1918aa17eca00ac82e4b5b979d50ea3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1918aa1710b00767313de411ee650a2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Copyright 2024 - HydrogenCloud</h3>
</div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
