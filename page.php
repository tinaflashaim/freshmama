<!DOCTYPE html>
<html lang="zh">
<meta charset="utf-8">

<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html dir="ltr" lang="en" class="no-js">
<!--<![endif]-->
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<? include_once ('_include_css.php');?>
</head>
  
<body>
<div class="flexbox flexbox--vertical">
  <div class="flexbox__item">
    <? include_once ('_include_header.php');?>
  </div>
  <div class="flexbox__item flexbox__item--expand">
    <div class="container page_content">
      f
    </div>
    <!-- / container page_content -->
  </div>
  <div class="flexbox__item">
    <? include_once ('_include_footer.php');?>
  </div>
</div>







<!--js-->
<? include_once ('_include_js.php');?>


  <script src="js/vendor/bxslider/jquery.bxslider-rahisified.min.js"></script>

  <script type="text/javascript">
    $('.bxslider').show().bxSlider({
      preloadImages: 'all',
      pager: true,
      controls: true,
      breaks: [{screen:768, pagerCustom: '#bx-pager', controls: false}]
    });
  </script>
</body>
</html>