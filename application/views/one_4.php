<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<?php include('one_top.php') ?>

<section  id="contactSlice"  class="slice section_fade collapse" aria-expanded="false" style="height: 0px;">
						<div class="container">
							<div class="row">

								<div class="col-sm-12">
									<h1 class="noSubtitle" style="font-weight: 600;">扶助申請案-線上登記</h1>
								</div>

								<div class="col-sm-4">
									<h4>地址:</h4>
									<address>
										臺中市<br/>
										西屯區 台灣大道OOXX號<br/>
										台中市政府惠中樓<br/>
									</address>
									<h4>電話:</h4>
									<address>
										04-2217-7166<br/>
									</address>
								</div>
								<form method="post" action="index.php/formhandler/newfile" id="contactfrm" role="form">

									<div class="col-sm-4"> 
										<div class="form-group">
											<label for="name">役男姓名</label>
											<input type="text" class="form-control" name="name" id="name" placeholder="姓名"  title="請輸入姓名(至少2個字)"/>
										</div>
										<div class="form-group">
											<label for="id">身分證字號</label>
											<input type="text" class="form-control" name="id" id="id" placeholder="身分證字號"  title="請輸入正確的身分證字號"/>
										</div>
										<div class="form-group">
											<label for="birthday">出生西元年月日</label>
											<input type="date" class="form-control" name="birthday" id="birthday" placeholder="yyyy-mm-dd"  title="請輸入出生西元年月日，格式: yyyy-mm-dd"/>
										</div>
										<div class="form-group">
											<label for="bdate">入伍日期</label>
											<input type="date" class="form-control" name="bdate" id="bdate" placeholder="yyyy-mm-dd"  title="請輸入入伍日期，格式: yyyy-mm-dd"/>
										</div>
										<div class="form-group">
											<label for="mtype">服役軍種</label>
											<select class="form-control" name="mtype">
												<option value="陸軍">陸軍</option>
												<option value="海軍">海軍</option>
												<option value="空軍">空軍</option>
												<option value="一般替代役">一般替代役</option>
												<option value="研發替代役">研發替代役</option>
											</select>
										</div>
										<div class="form-group">
											<label for="phone">連絡電話</label>
											<input type="tel" class="form-control" name="phone" id="phone" placeholder="連絡電話" title="請輸入連絡電話">
										</div>				
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="town">戶籍地址</label><br>
											<select class="form-control" name="county"  style="width: 32.3333%;display: inline;">
												<option value="66000">臺中市</option>	
											</select>
											<select class="form-control" name="town" id="town" style="width: 32.3333%;display: inline;">
												<option value="66000010">中區</option>
												<option value="66000020">東區</option>
												<option value="66000030">南區</option>
												<option value="66000040">西區</option>
												<option value="66000050">北區</option>
												<option value="66000060">西屯區</option>
												<option value="66000070">南屯區</option>
												<option value="66000080">北屯區</option>
												<option value="66000090">豐原區</option>
												<option value="66000100">東勢區</option>
												<option value="66000110">大甲區</option>
												<option value="66000120">清水區</option>
												<option value="66000130">沙鹿區</option>
												<option value="66000140">梧棲區</option>
												<option value="66000150">后里區</option>
												<option value="66000160">神岡區</option>
												<option value="66000170">潭子區</option>
												<option value="66000180">大雅區</option>
												<option value="66000190">新社區</option>
												<option value="66000200">石岡區</option>
												<option value="66000210">外埔區</option>
												<option value="66000220">大安區</option>
												<option value="66000230">烏日區</option>
												<option value="66000240">大肚區</option>
												<option value="66000250">龍井區</option>
												<option value="66000260">霧峰區</option>
												<option value="66000270">太平區</option>
												<option value="66000280">大里區</option>
												<option value="66000290">和平區</option>
											</select>
											<select class="form-control" name="village" id="village" style="width: 32.3333%;display: inline;    margin-bottom: 5px;">
												<option value="6938">繼光里</option>
												<option value="6939">大墩里</option>
												<option value="6940">綠川里</option>
												<option value="6941">公園里</option>
												<option value="6942">光復里</option>
												<option value="6943">柳川里</option>
												<option value="6944">大誠里</option>
												<option value="6945">中華里</option>
											</select>
											<br>
											<input class="form-control" name="address" id="address" placeholder="地址" title="請輸入正確地址">
										</div>
										<div class="form-group">
											<label for="email">電子信箱</label>
											<input type="email" class="form-control" name="email" id="email" placeholder="xxx@xxx.xxx" title="請輸入有效的電子信箱"/>
										</div>
										<fieldset class="clearfix securityCheck">
											<legend>驗證碼</legend>
											<div class="form-group">
												<img src="/One_page/js-plugin/neko-contact-ajax-plugin/php/image.php" alt="Image verification" id="verifyImg" style="zoom: 1.5;"/>
												<input class="required form-control" id="verify" name="verify" type="text" title="請輸入驗證碼">
											</div>
										</fieldset>
									</div> 									
									<div class="col-md-8 col-md-offset-4">
										<div class="result"></div>
										<button name="submit" type="submit" class="btn btn-lg" id="submit"> 送出申請</button>
									</div>
								</form>
							</div>
						</div>
					</section>
				<?php include('one_bottom.php') ?>

		<script type="text/javascript">
			$("#scrollTarget > ul > li").eq(4+1).addClass('active');
		</script>

	</body>
</html>
