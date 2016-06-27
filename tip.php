<? include_once ('_include_doc.php');?>
<head>
<? include_once ('_include_title.php');?>
<? include_once ('_include_css.php');?>
</head>
  
<body>



<div id="sb-site">
  <? include_once ('_include_header.php');?>

  <div class="container page_content tip">
    <div class="row">
      <div class="col-md-3 section_left">
        <h2 class="page_title">小知識</h2>
        <ul class="list-unstyled submenu_list hidden-xs">
          <li class="active">
            <a href="#">
              所有知識
            </a>
          </li>
          <li>
            <a href="#">
              關於魚
            </a>
          </li>
          <li>
            <a href="#">
              關於蝦
            </a>
          </li>
          <li>
            <a href="#">
              關於蟹
            </a>
          </li>
          <li>
            <a href="#">
              關於軟貝
            </a>
          </li>
          <li>
            <a href="#">
              其他
            </a>
          </li>
        </ul>
        <div class="mt-20 visible-xs">
          <select class="form-control">
            <option value="">所有知識</option>
            <option value="">關於魚</option>
            <option value="">關於蝦</option>
            <option value="">關於蟹</option>
            <option value="">關於貝類</option>
            <option value="">其他</option>
          </select>
        </div>
      </div>
      <div class="col-md-9 section_right">
        <div>
          <div class="row section_top_bar">
            <div class="col-md-12 text-right">
              &nbsp;
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 tip_category">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <div>
                    <img src="images/product-4.jpg" class="img-responsive hidden-xs">
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="tip_category_title">鯖魚</div>
                  <ul class="tip_category_list">
                    <li>
                      <a href="#">挪威鯖魚和台灣鯖魚有何不同？</a>
                    </li>
                    <li>
                      <a href="#">下鍋前需要清洗嗎？</a>
                    </li>
                    <li>
                      <a href="#">M、L、2L、4L，有什麼不同？</a>
                    </li>
                    <li>
                      <a href="#">挪威鯖魚和台灣鯖魚有何不同？</a>
                    </li>
                    <li>
                      <a href="#">下鍋前需要清洗嗎？</a>
                    </li>
                    <li>
                      <a href="#">M、L、2L、4L，有什麼不同？</a>
                    </li>
                    <li>
                      <a href="#">挪威鯖魚和台灣鯖魚有何不同？</a>
                    </li>
                    <li>
                      <a href="#">下鍋前需要清洗嗎？</a>
                    </li>
                    <li>
                      <a href="#">M、L、2L、4L，有什麼不同？</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 tip_category">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <div>
                    <img src="images/product-1.jpg" class="img-responsive hidden-xs">
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="tip_category_title">智利珍珠白鮭</div>
                  <ul class="tip_category_list">
                    <li>
                      <a href="#">挪威鯖魚和台灣鯖魚有何不同？</a>
                    </li>
                    <li>
                      <a href="#">下鍋前需要清洗嗎？</a>
                    </li>
                    <li>
                      <a href="#">M、L、2L、4L，有什麼不同？</a>
                    </li>
                    <li>
                      <a href="#">挪威鯖魚和台灣鯖魚有何不同？</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / container page_content -->
  <? include_once ('_include_footer.php');?>
</div>
<!--/ sb site-->

<? include_once ('_include_slide_menu.php');?>

<? include_once ('_include_slide_cart.php');?>

<!--js-->
<? include_once ('_include_js.php');?>



  <script src="js/vendor/bxslider/jquery.bxslider-rahisified.min.js"></script>

  <script type="text/javascript">
    $('.bxslider').show().bxSlider({
      preloadImages: 'all',
      pager: true,
      controls: true
    });
  </script>
</body>
</html>