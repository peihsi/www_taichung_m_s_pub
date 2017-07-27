<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<?php include('one_top.php') ?>
<style type="text/css">
/*.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    background: #78b1db;
    color: #fff;
}*/
h2.subTitle:after, h1.noSubtitle:after {
    background-color: #fefefe;
}
label{
	color: aliceblue;
}
.btn{
	background: rgb(62, 69, 58);
}
body{    overflow: hidden;}

@media (max-width: 768px){
	#process .container{
		position: relative;
		top:-3em;
	}	
}
.form-control {
    height: 35px;
    padding: 3px 12px;
    font-size: 20px;
    color: #fff;
}
.has-error div.error {
    position: absolute;
    top: -10px;
}
</style>
<section  id="process" class="slice section_fade">
<div class="section-BG b05"></div>
						<div class="container">
							<form method="post" action="/formhandler/queryprogress" id="queryfrm" role="form">
							<div class="row"><br>
								<div class="col-sm-12 Ani-FadaIn" style="animation-delay: 2.2s;" >
									<h1 class="noSubtitle" style="font-weight: 600; color: white">進度查詢</h1>
								</div>
								

									<div class="col-sm-4 col-sm-offset-2"> 
										<div class="form-group Ani-FadaIn" style="animation-delay: 2.5s;">
											<div class="BG"></div>
											<label for="q_name">役男姓名</label>
											<input type="text" class="form-control" name="q_name" id="q_name" placeholder="姓名"  title="請輸入姓名(至少2個字)"/>
										</div>
										<div class="form-group Ani-FadaIn" style="animation-delay: 2.8s;">
											<div class="BG"></div>
											<label for="q_id">身分證字號</label>
											<input type="text" class="form-control" name="q_id" id="q_id" placeholder="身分證字號"  title="請輸入正確的身分證字號"/>
										</div>										
									</div>
									<div class="col-sm-4">
										<div class="form-group Ani-FadaIn" style="animation-delay: 3.1s;">
											<div class="BG"></div>
											<label for="q_birthday">出生西元年月日</label>											
											<input type="date" class="form-control" name="q_birthday" id="q_birthday" placeholder="yyyy-mm-dd"  title="請輸入出生西元年月日"/>
										</div>										
									</div>
							</div>
							<div class="row Ani-FadaIn" style="animation-delay: 3.4s;">                    
									<div class="col-sm-8 col-sm-offset-2" style="margin-top: 1em; text-align: center;">
										<div class="oldqueryresult"></div>
										<button name="querysubmit" type="submit" class="btn btn-lg" id="querysubmit" style="">查詢進度</button>
										<br>
									</div>
								
							</div>
							</form>
						</div>
					</section>
<div id="P5-result-Modal" class="modal fade Modal-info-green" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">查詢結果</h4>
      </div>
      <div class="modal-body queryresult">
        <p>因為我喜歡你~</p><br>
        <p>想要認識你!</p>
        <p>若您同意區公所調閱您的財稅資料請在本項打勾。</p>
        <p>注意! 若不勾選，則無法進行線上申請登記!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>
<?php include('one_bottom.php') ?>
		<script type="text/javascript">
			$("#scrollTarget > ul > li").eq(5).addClass('active');
			$("body").stop().animate({scrollTop:0}, 500, 'swing');
		</script>

	</body>
</html>
