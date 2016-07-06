<? include_once ('_include_doc.php');?>
<head>
<? include_once ('_include_title.php');?>
<? include_once ('_include_css.php');?>
</head>
  
<body>

<div id="sb-site">
  <? include_once ('_include_header.php');?>

  <div class="container page_content member">
    <!-- 手機版會員上方-->
    <div class="row visible-sm visible-xs">
      <div class="col-sm-12">
        <div>
          <div class="text-center">
            <div class="member_info_title">會員專區</div>
            <div class="member_info_name text-secondary">
              <span>Flashaim</span>
              &nbsp;
              <span>
                <a href="#" class="text-secondary ">
                  <i class="fa fa-sign-out"></i>
                  <small>登出</small> 
                </a>
              </span>
            </div>
          </div>
          <ul class="row list-inline submenu_list submenu_list-mob">
            <li class="col-xs-4">
              <a href="member_orders.php">
                <i class="fa fa-file-text-o"></i>訂單
              </a>
            </li>
            <li class="col-xs-4 active">
              <a href="member.php">
                <i class="fa fa-money"></i>折扣卷
              </a>
            </li>
            <li class="col-xs-4">
              <a href="member_account.php">
                <i class="fa fa-smile-o"></i>帳戶資料
              </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
    <!--/手機版會員上方-->
    <div class="row">
      <div class="col-md-9 section_left">
        <div class="frame-white">
          <div class="row section_heading hidden-sm hidden-xs">
            <div class="col-md-12 text-left">
              訂單
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div>
                <div class="mt-20 pd-w-20">我們將會為您保留近半年內的訂單記錄。
                </div>
                <div class="row mt-20 pd-w-20">
                  <h4 class="order_sec_title visible-xs">
                    訂單紀錄
                  </h4>
                </div>
                <div class="row pd-w-20 xs-mt-0">
                  <table id="split-tables" class="order_table ">
                    <thead>
                        <tr>
                            <th>訂單編號
                            </th>
                            <th>日期
                            </th>
                            <th>付款方式
                            </th>
                            <th>金額
                            </th>
                            <th>狀態
                            </th>
                            <th>&nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td >
                            <span class="xs-inline-cell">訂單編號:&nbsp; </span>
                            20160415135733428 
                          </td>
                          <td >
                            <span class="xs-inline-cell">日期:&nbsp; </span>
                            2016-04-15
                          </td>
                          <td >
                            <span class="xs-inline-cell">付款方式:&nbsp; </span>
                            信用卡
                          </td>
                          <td >
                            <span class="xs-inline-cell">金額:&nbsp; </span>
                              $ 9,999
                          </td>
                          <td>
                            <span class="xs-inline-cell">狀態:&nbsp; </span>
                            <span class="text-success">已出貨</span>
                          </td>
                          <td>
                            <a href="member_orders_info.php" class="underline">檢視訂單</a>
                          </td>
                      </tr>
                      <tr>
                          <td >
                            <span class="xs-inline-cell">訂單編號:&nbsp; </span>
                            20160415135733428 
                          </td>
                          <td >
                            <span class="xs-inline-cell">日期:&nbsp; </span>
                            2016-04-15
                          </td>
                          <td >
                            <span class="xs-inline-cell">付款方式:&nbsp; </span>
                            ATM
                          </td>
                          <td >
                            <span class="xs-inline-cell">金額:&nbsp; </span>
                              $ 9,999
                          </td>
                          <td>
                            <span class="xs-inline-cell">狀態:&nbsp; </span>
                            <span class="text-highlight">處理中</span>
                          </td>
                          <td>
                            <a href="member_orders_info.php" class="underline">檢視訂單</a>
                          </td>
                      </tr>
                    </tbody> 
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 section_right hidden-sm hidden-xs">
        <div class="frame-white">
          <div class="member_info_title">會員專區</div>
          <div class="member_info_name text-secondary">Flashaim</div>
          <ul class="list-unstyled submenu_list">
            <li>
              <a href="#">
                <i class="fa fa-file-text-o"></i>訂單
              </a>
            </li>
            <li class="active">
              <a href="#">
                <i class="fa fa-money"></i>折扣卷
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-smile-o"></i>帳戶資料
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-sign-out"></i>登出
              </a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / container page_content -->
  <? include_once ('_include_footer.php');?>
</div>
<!--/ sb site-->

<? include_once ('_include_common_bottom.php');?>

</body>
</html>