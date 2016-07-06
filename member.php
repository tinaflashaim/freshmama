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
              折扣卷 (2)
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs member_tab" role="tablist">
                  <li role="presentation" class="active"><a href="#coupon_available" aria-controls="coupon_available" role="tab" data-toggle="tab">未使用</a></li>
                  <li role="presentation"><a href="#coupon_used" aria-controls="coupon_used" role="tab" data-toggle="tab">已使用</a></li>
                  <li role="presentation"><a href="#coupon_expired" aria-controls="coupon_expired" role="tab" data-toggle="tab">已失效</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- 未使用 -->
                  <div role="tabpanel" class="tab-pane active" id="coupon_available">
                    <table id="split-tables" class="member_table">
                      <thead>
                          <tr>
                              <th>金額
                              </th>
                              <th>使用門檻
                              </th>
                              <th>活動
                              </th>
                              <th>使用期限
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="member_table_info">
                            <td class="coupon_price">$100
                            </td>
                            <td class="coupon_limit">
                                滿$999
                            </td>
                            <td class="coupon_event">
                              加入新會員折扣 $100
                            </td>
                            <td class="coupon_time">
                                2016/06/06 ~ 2016/06/08
                            </td>
                        </tr>
                        <tr class="member_table_coupon">
                          <td colspan="4" class="text-center">
                            <span>
                              <a href="javascript: viod(0)" class="link-coupon">
                                <i class="fa fa-cut"></i>&nbsp; 
                                序號： JFPCO1BOZAF4Z 
                              </a>
                            </span>
                          </td>
                        </tr>
                        <tr class="member_table_info">
                            <td class="coupon_price">$100
                            </td>
                            <td class="coupon_limit">
                                滿$999
                            </td>
                            <td class="coupon_event">
                              加入新會員折扣 $100
                            </td>
                            <td class="coupon_time">
                                2016/06/06 ~ 2016/06/08
                            </td>
                        </tr>
                        <tr class="member_table_coupon">
                          <td colspan="4" class="text-center">
                            <span>
                              <a href="javascript: viod(0)" class="link-coupon">
                                <i class="fa fa-cut"></i>&nbsp; 
                                序號： JFPCO1BOZAF4Z 
                              </a>
                            </span>
                          </td>
                        </tr>
                      </tbody> 
                    </table>
                  </div>
                  <!-- /未使用 -->
                  <!-- 已使用 -->
                  <div role="tabpanel" class="tab-pane" id="coupon_used">
                    <table id="split-tables" class="member_table">
                      <thead>
                          <tr>
                              <th>金額
                              </th>
                              <th>使用門檻
                              </th>
                              <th>活動
                              </th>
                              <th>使用期限
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="member_table_info">
                            <td class="coupon_price">$100
                            </td>
                            <td class="coupon_limit">
                                滿$999
                            </td>
                            <td class="coupon_event">
                              加入新會員折扣 $100
                            </td>
                            <td class="coupon_time">
                                2016/06/06 ~ 2016/06/08
                            </td>
                        </tr>
                        <tr class="member_table_coupon">
                          <td colspan="4" class="text-center">
                            <span>
                              2016/06/06 使用完畢
                            </span>
                          </td>
                        </tr>
                        <tr class="member_table_info">
                            <td class="coupon_price">$100
                            </td>
                            <td class="coupon_limit">
                                滿$999
                            </td>
                            <td class="coupon_event">
                              加入新會員折扣 $100
                            </td>
                            <td class="coupon_time">
                                2016/06/06 ~ 2016/06/08
                            </td>
                        </tr>
                        <tr class="member_table_coupon">
                          <td colspan="4" class="text-center">
                            <span>
                              2016/06/06 使用完畢
                            </span>
                          </td>
                        </tr>
                      </tbody> 
                    </table>
                  </div>
                  <!-- /已使用 -->
                  <!-- 已失效 -->
                  <div role="tabpanel" class="tab-pane" id="coupon_expired">
                    <table id="split-tables" class="member_table">
                      <thead>
                          <tr>
                              <th>金額
                              </th>
                              <th>使用門檻
                              </th>
                              <th>活動
                              </th>
                              <th>使用期限
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="member_table_info">
                            <td class="coupon_price">$100
                            </td>
                            <td class="coupon_limit">
                                滿$999
                            </td>
                            <td class="coupon_event">
                              加入新會員折扣 $100
                            </td>
                            <td class="coupon_time">
                                2016/06/06 ~ 2016/06/08
                            </td>
                        </tr>
                        <tr class="member_table_coupon">
                          <td colspan="4" class="text-center">
                            <span>
                              逾期失效 
                            </span>
                          </td>
                        </tr>
                        <tr class="member_table_info">
                            <td class="coupon_price">$100
                            </td>
                            <td class="coupon_limit">
                                滿$999
                            </td>
                            <td class="coupon_event">
                              加入新會員折扣 $100
                            </td>
                            <td class="coupon_time">
                                2016/06/06 ~ 2016/06/08
                            </td>
                        </tr>
                        <tr class="member_table_coupon">
                          <td colspan="4" class="text-center">
                            <span>
                              逾期失效
                            </span>
                          </td>
                        </tr>
                      </tbody> 
                    </table>
                  </div>
                  <!-- /已失效 -->
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