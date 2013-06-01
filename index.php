	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

   
<?php 
	include ('includes/change.php'); 
	//array of allowed pages
	$exc = array('home','news','gallery','benefits','map','studios','deals','contact','press','links','en','gr','amp','wkp');
	
	//initialization of GET parameters
	if (isset($_GET['page']) && (!empty($_GET['page'])) && (in_array($_GET['page'],$exc))) {
		$page = $_GET['page'];}
	else { $page = "home"; }
	if (isset($_GET['b']) && (!empty($_GET['b'])) && (in_array($_GET['b'],$exc))) {
		$b = $_GET['b'];}
	else { $b = "wkp"; }
	if (isset($_GET['lang']) && (!empty($_GET['lang'])) && (in_array($_GET['lang'],$exc))) {
		$lang = $_GET['lang'];}
	else { $lang = "gr"; }
?>


<head>
<title>SMART STUDIOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- time for css links -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/galleriffic-2.css" type="text/css" />
<!-- styles needed by jScrollPane -->
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="css/accordion.css" rel="stylesheet" media="all" />
<link type="text/css" href="css/jquery.jscrollpane.lozenge.css" rel="stylesheet" media="all" />

<!-- and there goes the scripts -->
<!-- latest jQuery direct from google's CDN -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.vscroll.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jsScroller.js"></script>
<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
<script type="text/javascript" src="js/jsScrollbar.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/curvy.corners.trunk.js"></script>

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

<!--scrollpane script-->
<script>
$(function()
{
	$(".scroll-pane").css('overflow', 'auto');
	$('.scroll-pane').jScrollPane({showArrows: true,hideFocus: true});
});
</script>

<!--script for loader in the studios area-->
<script type="text/javascript">
function changer(src)
{
$('#loader img').remove();
$('#loader').addClass('loading')
 var img = new Image();
        $(img).load(function () {
            //$(this).css('display', 'none'); // .hide() doesn't work in Safari when the element isn't on the DOM already
            $(this).hide();
            $('#loader').removeClass('loading').append(this);
            $(this).fadeIn();
        }).error(function () {
            // notify the user that the image could not be loaded
        }).attr('src', src);

};
</script>


 <script type="text/javascript">
    <!--$(function() {
    $('#loader img').hide().load(function() {
        $('#loader').removeClass('loading');
        $(this).fadeIn();
    });

    // This makes it work, even when the image is cached
    var src = $('#loader img').attr('src'); // Stores original src from HTML as a variable
   $('#loader img').attr('src', '') // Set's source to empty string
   $('#loader img').attr('src', src) // Sets it back to the old value

    // BELOW IS AN ALTERNATIVE WAY TO MAKE IT WORK FOR CACHED IMAGES
    //-->
    </script>


<script>
$(function()
{	
	$(".scroll-pane2").css('overflow', 'auto');
	$('.scroll-pane2').jScrollPane(
		{
			showArrows: true,
			horizontalGutter: 30,
			verticalGutter: 10,
			hideFocus: true
		}
	);
});
</script>

<!--vscroll script-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#content').vScroll({ speed: 500, upID: "#prevButton", downID: "#nextButton" });
    });
</script>

<!--formvalidation script-->
<script>
  $(document).ready(function(){
    $("#commentForm").validate();
  });
</script>

<!--image gallery scripts-->
<script type="text/javascript">
	document.write('<style>.noscript { display: none; }</style>');
</script>

<script language="javascript" type="text/javascript">
 $().ready(function() {  
     $('.kwicks').kwicks({  
        min :100,  
		duration: 1000,
		easing: 'easeOutQuint'

     });  
 });  
</script>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		// We only want these styles applied when javascript is enabled
		$('div.navigation').css({'width' : '300px', 'float' : 'left'});
		$('div.content').css('display', 'block');

		// Initially set opacity on thumbs and add
		// additional styling for hover effect on thumbs
		var onMouseOutOpacity = 0.67;
		$('#thumbs ul.thumbs li').opacityrollover({
			mouseOutOpacity:   onMouseOutOpacity,
			mouseOverOpacity:  1.0,
			fadeSpeed:         'fast',
			exemptionSelector: '.selected'
		});
		
		// Initialize Advanced Galleriffic Gallery
		var gallery = $('#thumbs').galleriffic({
			delay:                     2500,
			numThumbs:                 21,
			preloadAhead:              10,
			enableTopPager:            false,
			enableBottomPager:         true,
			maxPagesToShow:            7,
			imageContainerSel:         '#slideshow',
			controlsContainerSel:      '#controls',
			captionContainerSel:       '#caption',
			loadingContainerSel:       '#loading',
			renderSSControls:          true,
			renderNavControls:         true,
			playLinkText:              'Play Slideshow',
			pauseLinkText:             'Pause Slideshow',
			prevLinkText:              '&lsaquo; Previous Photo',
			nextLinkText:              'Next Photo &rsaquo;',
			nextPageLinkText:          'Next &rsaquo;',
			prevPageLinkText:          '&lsaquo; Prev',
			enableHistory:             false,
			autoStart:                 false,
			syncTransitions:           true,
			defaultTransitionDuration: 900,
			onSlideChangeOut:             function(prevIndex) {
			// 'this' refers to the gallery, which is an extension of $('#thumbs')
			this.find('ul.thumbs').children()
				.eq(prevIndex).fadeTo('fast', onMouseOutOpacity);
			},
			onSlideChangeIn:              function(nextIndex) {
				this.find('ul.thumbs').children()
			.eq(nextIndex).fadeTo('fast', 1.0);
			},

			onPageTransitionOut:       function(callback) {
				this.fadeTo('fast', 0.0, callback);
			},
			onPageTransitionIn:        function() {
				this.fadeTo('fast', 1.0);
			}
		});
	});
</script>
</head>


<body>
<div id="Table_01">

	<div id="bg-01_"> <!-- logo holder -->
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="252" height="134" id="FlashID13" title="Smart Studios">
		  <param name="movie" value="flash/logo_button_clip.swf" />
          <PARAM NAME="FlashVars" VALUE="lang=<?php echo $lang;?>" /> 
		  <param name="quality" value="high" />
		  <param name="wmode" value="transparent" />
		  <param name="swfversion" value="9.0.45.0" />
		  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
		  <!--[if !IE]>-->
		  <object type="application/x-shockwave-flash" data="flash/logo_button_clip.swf" width="252" height="134">
		    <!--<![endif]-->
			<PARAM NAME="FlashVars" VALUE="lang=<?php echo $lang;?>" /> 
		    <param name="quality" value="high" />
		    <param name="wmode" value="transparent" />
		    <param name="swfversion" value="9.0.45.0" />		   
		    <!--[if !IE]>-->
	    </object>
		  <!--<![endif]-->
	  </object>
	</div>
	

	<div id="bg-02_">	<!--menu bar-->
	<?php if (($page != 'home') && ($lang == 'gr')) { ?>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="748" height="83" id="FlashID" title="">
        <param name="movie" value="flash/menu_bar.swf" />
		<PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="9.0.45.0" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="flash/menu_bar.swf" width="748" height="83">
          <!--<![endif]-->
          <PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="swfversion" value="9.0.45.0" />
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
	  <?php } else if (($page != 'home') && ($lang == 'en')) {?>
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="748" height="83" id="FlashID" title="">
        <param name="movie" value="flash/menu_bar_en.swf" />
		<PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="9.0.45.0" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="flash/menu_bar_en.swf" width="748" height="83">
          <!--<![endif]-->
          <PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="swfversion" value="9.0.45.0" />
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
	  <?php } ?>
	</div>
	
	<div id="bg-03_"> <!-- project selection -->
	<?php if (($page != 'home' )){
		if ($b == 'wkp') { ?>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="619" height="58" id="FlashID2" title="">
          <param name="movie" value="flash/project_king_btns.swf" />
          		<PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="9.0.45.0" />         
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="flash/project_king_btns.swf" width="619" height="58">
            <!--<![endif]-->
            		<PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="9.0.45.0" />
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
      </object>
	<?php }else if ($b == 'amp') { ?>
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="619" height="58" id="FlashID12" title="">
		<param name="movie" value="flash/project_ambelokipi_btns.swf" />
        <PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
		<param name="quality" value="high" />
		<param name="wmode" value="opaque" />
		<param name="swfversion" value="9.0.45.0" />
		<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
		<!--[if !IE]>-->
		<object type="application/x-shockwave-flash" data="flash/project_ambelokipi_btns.swf" width="619" height="58">
		<!--<![endif]-->
        	<PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
			<param name="quality" value="high" />
			<param name="wmode" value="opaque" />
			<param name="swfversion" value="9.0.45.0" />		
		<!--[if !IE]>-->
		</object>
		<!--<![endif]-->
	</object>
	<?php } }?>
	</div>
	
	<div id="bg-04_"> <!-- language selection -->
	  <object id="FlashID14" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="129" height="58">
	    <param name="movie" value="flash/languages.swf" />
        <PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
	    <param name="quality" value="high" />
	    <param name="wmode" value="transparent" />
	    <param name="swfversion" value="9.0.45.0" />	   
	    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
	    <!--[if !IE]>-->
	    <object type="application/x-shockwave-flash" data="flash/languages.swf" width="129" height="58">
	      <!--<![endif]-->
          <PARAM NAME="FlashVars" VALUE="page=<?php echo $page;?>&b=<?php echo $b;?>&lang=<?php echo $lang;?>" /> 
	      <param name="quality" value="high" />
	      <param name="wmode" value="transparent" />
	      <param name="swfversion" value="9.0.45.0" />	      
	      <!--[if !IE]>-->
        </object>
	    <!--<![endif]-->
      </object>
	</div>
	
	<div id="bg-05_"></div>
	
	<div id="bg-06_"> <!-- main content-->
    	<div>
			<?php 
				include ($page.'.php'); 
				include ('page_title.php');
			?>
		</div>
	</div>

</div> <!--end of main div -->
</body>
</html>