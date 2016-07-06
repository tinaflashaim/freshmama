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
              帳戶資料
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div>
                <!--個人資料設定-->
                <div >
                  <h4 class="member_frame_section">個人資料設定</h4>
                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-4">
                          <input type="type" class="form-control" >
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">性別</label>
                        <div class="col-sm-5">
                          <label class="radio-inline">
                            <input type="radio" id="inlineCheckbox1" value="option1"> 男
                          </label>
                          <label class="radio-inline">
                            <input type="radio" id="inlineCheckbox2" value="option2"> 女
                          </label>
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">生日</label>
                        <div class="col-sm-10">
                          <div>
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option><option value="1">2016</option>
                            </select>
                            年
                          </div>
                          <div class="mt-10">
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option>
                            </select>
                            月&nbsp;
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option>
                            </select>
                            日
                          </div>
                          
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-5">
                          <input type="email" class="form-control" >
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">手機</label>
                        <div class="col-sm-4">
                          <input type="type" class="form-control" >
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">地址</label>
                        <div class="col-sm-10">
                          <div>
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option><option value="1">基隆市</option><option value="199">台北市</option>
                            </select>
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option>
                            </select>
                          </div>
                          <div class="mt-10 col-sm-6 pd-0">
                            <input class="form-control" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-primary btn-block" >儲存</button>
                        </div>
                      </div>
                    </div> 
                  </div>
                  <div class="col-sm-10 col-sm-push-2">
                    
                  </div>
                  
                </div>
                <!--/個人資料設定-->
                <!--收件人資料設定-->
                <div >
                  <h4 class="member_frame_section">收件人資料設定</h4>
                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-4">
                          <input type="type" class="form-control" value="王小明">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">手機</label>
                        <div class="col-sm-4">
                          <input type="type" class="form-control" value="0911111111">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="exampleInputEmail1" class="col-sm-2 control-label">收貨人地址</label>
                        <div class="col-sm-10">
                          <div>
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option><option value="1">基隆市</option><option value="199">台北市</option>
                            </select>
                            <select class="form-control input-auto">
                              <option value="-1">請選擇</option>
                            </select>
                          </div>
                          <div class="mt-10 col-sm-6 pd-0">
                            <input class="form-control" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-primary btn-block" >儲存</button>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
                <!--/收件人資料設定-->
                <!--帳號連結-->
                <div>
                  <h4 class="member_frame_section">帳號連結</h4>
                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-12">
                              一般帳號
                              <span class="pull-right text-success">
                                <i class="fa fa-check-circle "></i>
                                已開通
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-12">
                              <i class="fa fa-facebook fa-lg" style="color:#3b5998;"></i> &nbsp; Facebook
                              <span class="pull-right text-success">
                                <a href="" class="btn btn-info btn-sm" role="button">開通</a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-12">
                              <i class="fa fa-google-plus fa-lg" style="color:#dd4b39;"></i> &nbsp; Google
                              <span class="pull-right text-success">
                                <a href="" class="btn btn-info btn-sm" role="button">開通</a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-12">
                              <i class="fa fa-yahoo fa-lg" style="color:#720e9e;"></i> &nbsp;Yahoo 
                              <span class="pull-right text-success">
                                <a href="" class="btn btn-info btn-sm" role="button">開通</a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
                <!--/帳號連結-->
                <!--密碼設定-->
                <div>
                  <h4 class="member_frame_section">密碼設定</h4>
                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="row form-group">
                        <label for="" class="col-sm-2 control-label">舊密碼</label>
                        <div class="col-sm-3">
                          <input type="password" class="form-control" >
                        </div>
                      </div>
                      <div class="row form-group">
                        <label for="" class="col-sm-2 control-label">新密碼</label>
                        <div class="col-sm-3">
                          <input type="password" class="form-control" >
                        </div>
                        <small class="text-highlight help-text">*密碼必須超過6個字</small>
                      </div>
                      <div class="row form-group">
                        <label for="" class="col-sm-2 control-label">確認新密碼</label>
                        <div class="col-sm-3">
                          <input type="password" class="form-control" >
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-primary btn-block" disabled="disabled">儲存</button>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
                <!--/密碼設定-->
                
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