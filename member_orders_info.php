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
                <div class="row mt-20 pd-w-20">
                  <h4 class="text-secondary order_sec_title">20160415135733428</h4>
                  <a href="member_orders.php" class="btn btn-back pull-right hidden-xs">
                    <i class="fa fa-angle-left"></i>
                    回上頁
                  </a>
                </div>
                
                <div class="row mt-20 pd-w-20 xs-mt-0">
                  <table id="split-tables" class="order_table">
                    <thead>
                        <tr>
                            <th>日期
                            </th>
                            <th>付款方式
                            </th>
                            <th>總金額
                            </th>
                            <th>狀態
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td >
                            <span class="xs-inline-cell">日期:&nbsp; </span>
                            2016-04-15
                          </td>
                          <td >
                            <span class="xs-inline-cell">付款方式:&nbsp; </span>
                            信用卡
                          </td>
                          <td >
                            <span class="xs-inline-cell">總金額:&nbsp; </span>
                              $ 9,999
                          </td>
                          <td>
                            <span class="xs-inline-cell">狀態:&nbsp; </span>
                            <span class="text-success">已出貨</span>
                          </td>
                      </tr>
                    </tbody> 
                  </table>
                </div>

                <div class="row mt-50 pd-w-20">
                  <h4 class="order_sec_title">
                    收件人資訊
                  </h4>

                  <table id="split-tables" class="order_table">
                    <thead>
                        <tr>
                            <th>收件人
                            </th>
                            <th>收件人電話
                            </th>
                            <th>收件地址 
                            </th>
                            <th>出貨時間
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td >
                            <span class="xs-inline-cell">收件人:&nbsp; </span>
                            王小明
                          </td>
                          <td >
                            <span class="xs-inline-cell">收件人電話:&nbsp; </span>
                            0987654321
                          </td>
                          <td >
                            <span class="xs-inline-cell">收件地址 :&nbsp; </span>
                              000 高雄市高雄區高雄街1號
                          </td>
                          <td >
                            <span class="xs-inline-cell">出貨時間:&nbsp; </span>
                              2016-07-07
                          </td>
                      </tr>
                    </tbody> 
                  </table>
                </div>
                
                <div class="row mt-50 pd-w-20">
                  <h4 class="order_sec_title">
                    購物明細
                  </h4>

                  <table id="split-tables" class="order_table">
                    <thead>
                        <tr>
                            <th>商品
                            </th>
                            <th>金額
                            </th>
                            <th>數量
                            </th>
                            <th>小計
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td >
                            <span class="xs-inline-cell">商品:&nbsp; </span>
                            <span class="text-secondary">挪威薄鹽鯖魚片(L)</span>
                          </td>
                          <td >
                            <span class="xs-inline-cell">單價:&nbsp; </span>
                            $55
                          </td>
                          <td >
                            <span class="xs-inline-cell">數量 :&nbsp; </span>
                              100
                          </td>
                          <td >
                            <span class="xs-inline-cell">小記:&nbsp; </span>
                              $9,999
                          </td>
                      </tr>
                      <tr>
                          <td >
                            <span class="xs-inline-cell">商品:&nbsp; </span>
                            <span class="text-secondary">挪威薄鹽鯖魚片(L)</span>
                          </td>
                          <td >
                            <span class="xs-inline-cell">單價:&nbsp; </span>
                            $55
                          </td>
                          <td >
                            <span class="xs-inline-cell">數量 :&nbsp; </span>
                              100
                          </td>
                          <td >
                            <span class="xs-inline-cell">小記:&nbsp; </span>
                              $9,999
                          </td>
                      </tr>
                    </tbody> 
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">
                                <div>商品合計：<span class="text-highlight">$700</span></div>
                                <div>折扣卷：<span class="text-highlight">-$100</span></div>
                                <div>運費：<span class="text-highlight">$0</span></div>
                                <div>訂單總計：<span class="text-highlight"><strong>$600</strong></span></div>
                            </td>
                        </tr>
                    </tfoot>
                  </table>
                </div>
                
                <div class="row mt-50 pd-w-20 pd-bm-20">
                  <h4 class="order_sec_title">
                    發票資料
                  </h4>

                  <table class="order_table clean">
                    <colgroup>
                        <col width="100px">
                        <col>
                    </colgroup>
                    <tbody>
                      <tr>
                          <td>
                            發票類型：
                          </td>
                          <td>
                            三聯發票
                          </td>
                      </tr>
                      <tr>
                          <td>
                            發票抬頭：
                          </td>
                          <td>
                            Flashaim Inc
                          </td>
                      </tr>
                      <tr>
                          <td>
                            統一編號：
                          </td>
                          <td>
                            134567890
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