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
    background: #777772;
    color: #fff;
}*/
h2.subTitle:after, h1.noSubtitle:after {
    background-color: #fefefe;
}

.form-control {
    color: #fff;
}

.form-control {
    height: 35px;
    padding: 3px 12px;
    font-size: 20px;
}

select option{
	background: rgb(102, 101, 98);
    color: #fff;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
}

.has-error div.error {
    position: absolute;
    top: -10px;
}

.EW{
        outline: red auto 5px;
}

.modal-body ul li {padding-left: 5px;margin-bottom: 10px;}
</style>
<section class="slice section_fade" id="team" style="background: #ffffff;">
<div class="section-BG b04"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 " style="">
				<h1 class="Ani-FadaIn" style="animation-delay: 2.2s; font-weight: 600; color: white;">線上申請</h1>
				<h2 id="P3-ST1" class="subTitle Ani-FadaIn" style="animation-delay: 2.5s; color: white;">第一步：事前評估試算</h2>
			</div>
		</div>
		<div class="row" id="P3-S1">
			<div class="col-sm-6" id="home_page1" style="transition: 1s;">
				<div class="form-group Ani-FadaIn" style="animation-delay: 2.8s;">
					<div class="BG"></div>
					<label for="home_members">1.除役男外之家中人口數<a class="P3-Hbtn" data-toggle="modal" data-target="#P3-1-Modal">說明</a></label>
					<!--<input type="number" class="form-control" name="home_members" id="home_members" placeholder="輸入人數"  title="請輸入您的家庭成員數"/>-->
					<select name="home_members" class="form-control required digits" type="number" id="home_members" size="1" value="" placeholder="請輸入您的家庭成員數" title="請輸入您的家庭成員數">
					<option value="1">1人</option>
					<option value="2">2人</option>
					<option value="3">3人</option>
					<option value="4">4人</option>
					<option value="5">5人</option>
					<option value="6">6人</option>
					<option value="7">7人</option>
					<option value="8">8人</option>
					<option value="9">9人</option>
					<option value="10">10人</option>
					</select>
				</div>
				<div class="form-group Ani-FadaIn" style="animation-delay: 3.0s;" aria-expanded="false" style="">
					<div class="BG"></div>
					<label for="home_not_members">2.應被排除之家屬人數<a class="P3-Hbtn" data-toggle="modal" data-target="#P3-2-Modal">說明</a></label>
					<!--<input type="number" class="form-control" name="home_not_members" id="home_not_members" placeholder="應被排除之家屬人數" title="請輸入應被排除之家屬人數"/>-->
					<select name="home_not_members" class="form-control required digits" type="number" id="home_not_members" size="1" value="" placeholder="應被排除之家屬人數" title="應被排除之家屬人數">
					<option value="0">0人</option>
					<option value="1">1人</option>
					<option value="2">2人</option>
					<option value="3">3人</option>
					<option value="4">4人</option>
					<option value="5">5人</option>
					<option value="6">6人</option>
					<option value="7">7人</option>
					<option value="8">8人</option>
					<option value="9">9人</option>
					<option value="10">10人</option>
					</select>
				</div>
				<div class="form-group Ani-FadaIn" style="animation-delay: 3.2s;" aria-expanded="false" style="">
					<div class="BG"></div>
					<label for="home_income">3.全戶月所得有超過<span>13,084</span>元嗎?<a class="P3-Hbtn" data-toggle="modal" data-target="#P3-3-Modal">說明</a></label>
					<select name="home_income" class="form-control required digits" type="tel" id="home_income" size="1" value="" placeholder="應被排除之家屬人數" title="請輸入應被排除之家屬人數"><option value="">請選擇</option><option value="Y">超過</option><option value="N">未超過</option></select>
				</div>
			</div>
			<div class="col-sm-6 form-group" id="home_page2" aria-expanded="false" style=""> 
				<div class="form-group Ani-FadaIn" style="animation-delay: 3.4s;">
					<div class="BG"></div>
					<label for="home_property">4.全戶動產超過<span>2,750,000</span>元嗎?</label><a class="P3-Hbtn" data-toggle="modal" data-target="#P3-4-Modal">說明</a>
					<!--<P>動產為全家人的存款本金、投資及有價證券按面額計算之合計</P>-->
					<select name="home_property" class="form-control required digits" type="tel" id="home_property" size="1" value="" placeholder="應被排除之家屬人數" title="請輸入應被排除之家屬人數"><option value="">請選擇</option><option value="Y">超過</option><option value="N">未超過</option></select>
				</div>
				<div class="form-group Ani-FadaIn" style="animation-delay: 3.6s;" aria-expanded="false" style="">
					<div class="BG"></div>
					<label for="home_immproperty">5.全戶不動產超過<span>3,520,000</span>元嗎?</label><a class="P3-Hbtn" data-toggle="modal" data-target="#P3-5-Modal">說明</a>
					<!--<P>以政府公告之房屋現值及土地公告現值計算，自用住宅與其土地不用計入</P>-->
					<select name="home_immproperty" class="form-control required digits" type="tel" id="home_immproperty" size="1" value="" placeholder="應被排除之家屬人數" title="請輸入應被排除之家屬人數"><option value="">請選擇</option><option value="Y">超過</option><option value="N">未超過</option></select>
				</div>
			</div>
			<div class="col-sm-12 form-group" id="home_page2" aria-expanded="false" style=""> 
				<div class="form-group Ani-FadaIn" style="animation-delay: 3.8s;">
					<div class="BG" style="background-color:rgba(80, 119, 65, 0.36); "></div>
					<label for="home_count_sent">送出前請確認各項問題皆已正確回答</label>
					<button type="number" class="form-control" name="home_count_sent" id="home_count_sent">送出試算</button>
				</div>
			</div>
		</div>
		<div class="row" id="P3-S2" style="display: none;">
			<form method="post" action="/formhandler/newfile" id="contactfrm" role="form">
				<div class="col-sm-6"> 
					<div class="form-group Ani-FadaIn" style="animation-delay: 0.2s;">
						<div class="BG"></div>
						<label for="name">役男姓名</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="姓名"  title="請輸入姓名(至少2個字)"/>
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 0.4s;">
						<div class="BG"></div>
						<label for="id">身分證字號</label>
						<input type="text" class="form-control" name="id" id="id" placeholder="身分證字號"  title="請輸入正確的身分證字號"/>
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 0.6s;">
						<div class="BG"></div>
						<label for="birthday">出生西元年月日</label>
						<input type="date" class="form-control" name="birthday" id="birthday" placeholder="yyyy-mm-dd"  title="請輸入出生西元年月日，格式: yyyy-mm-dd"/>
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 0.8s;">
						<div class="BG"></div>
						<label for="bdate">入伍日期</label>
						<input type="date" class="form-control" name="bdate" id="bdate" placeholder="yyyy-mm-dd"  title="請輸入入伍日期，格式: yyyy-mm-dd"/>
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 1.0s;">
						<div class="BG"></div>
						<label for="mtype">服役軍種</label>
						<select class="form-control" name="mtype">
							<?php  echo $seloption;   ?>
						</select>
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 1.2s;">
						<div class="BG"></div>
						<label for="phone">連絡電話</label>
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="連絡電話" title="請輸入連絡電話">
					</div>			
				</div>
				<div class="col-sm-6">
					<div class="form-group Ani-FadaIn" style="animation-delay: 1.2s;">
						<div class="BG"></div>
						<label for="aut">財稅調查授權同意</label>
						<input type="checkbox" class="form-control" name="aut" id="aut" placeholder="同意請打勾" title="同意請打勾" style="width: 30px;
    margin: 8px 5px 0px; height: 27px; position: relative; top: -3px;">
						<div class="tax-check-info"  data-toggle="modal" data-target="#P3-6-Modal">我同意區公所調閱我的家戶財稅與財產資料</div>
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 1.4s;">
						<div class="BG"></div>
						<div class="BG" style=" top: 68px;"></div>
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
						<input class="form-control Ani-FadaIn" name="address" id="address" placeholder="地址" title="請輸入正確地址">
					</div>
					<div class="form-group Ani-FadaIn" style="animation-delay: 1.6s; margin-top: 72px;">
						<div class="BG"></div>
						<label for="email">電子信箱</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="xxx@xxx.xxx" title="請輸入有效的電子信箱"/>
					</div>
					<fieldset class="clearfix securityCheck Ani-FadaIn" style="animation-delay: 1.8s;">
						<legend style="color: #d1d1d1;display: none;">驗證碼</legend>
						<div class="form-group Ani-FadaIn" style="animation-delay: 1.8s;">
							<div class="BG" style="width: 50%;"></div>
							<label for="verify">驗證碼</label>
							<input class="required form-control" id="verify" name="verify" type="text" title="請輸入驗證碼" style="width: 50%; /*display: inline-block; vertical-align: top;*/">
							<img src="/One_page/js-plugin/neko-contact-ajax-plugin/php/image.php" alt="Image verification" id="verifyImg" style="zoom: 1.5;position: absolute;
    top: 18px;
    left: calc(50% + 10px);cursor: pointer;"/>
							
						</div>
					</fieldset>
				</div>
				<div class="col-sm-12 form-group mt15" id="" aria-expanded="false" style=""> 
					<div class="form-group Ani-FadaIn" style="animation-delay: 2.0s;">
						<div class="BG" style="background-color:rgba(80, 119, 65, 0.36); "></div>
						<label for="submit">送出前請確認各項資料已完整填寫</label>
						
						<button name="submit" type="submit" class="form-control" name="home_count_sent" id="submit">送出申請</button>
						<div class="Presult Ani-FadaIn" style="margin-top:1.5em; "></div>
					</div>
				</div>
				<!--<div class="col-md-12 col-md-offset-4 Ani-FadaIn" style="animation-delay: 2.0s;">
					<div class="result Ani-FadaIn"></div>
					<button name="submit" type="submit" class="btn btn-lg" id="submit"> 送出申請</button>
				</div>-->
			</form>
		</div>
	</div>
</section>
<style type="text/css">
.btn {
    background-color: #78b1db;
    border: 2px solid #e5e5e5;
}
.btn:hover {
    color: #2f5e80;
}
</style>
<div id="P3-1-Modal" class="modal fade Modal-info-blue" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">本辦法中所稱的家屬</h4>
      </div>
      <div class="modal-body">
        <p>本辦法所稱服兵役役男（以下簡稱役男），指應徵（召）集在營（勤）服兵役義務役人員。 本辦法所稱家屬，指役男之下列家庭成員：</p><ul style="list-style-type: cjk-ideographic;"><li> 直系血親及配偶。</li><li>兄弟姊妹。但有配偶或子女者，以與役男同居共營生活者為限。</li><li> 於役男入營前一年持續為同一戶籍或同址分戶，且同居共營生活之三 親等內之血親、姻親及民法一千一百十四條第四款之親屬。因作戰、 因公、意外、因病致傷殘之停（退）役役男家屬，分別以春節、端午 、中秋三節（以下簡稱三節）前一年持續為同一戶籍或同址分戶，且 同居共營生活者為限。</li></ul>
        <p>本辦法所稱遺屬，指前項家屬。但配偶以未再婚者為限；兄弟姊妹有配偶 或子女者，以與役男父母、配偶或子女同居共營生活者為限；三親等內之 血親、姻親及民法一千一百十四條第四款之親屬，以原經核定扶助有案者 為限。 </p><p>歸化我國國籍、歸國僑民及大陸地區、香港、澳門來臺役男之家屬，以其 在臺灣地區設籍為準。</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>
<div id="P3-2-Modal" class="modal fade Modal-info-blue" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">應被排除家屬</h4>
      </div>
      <div class="modal-body">
        <p>具以下身分者，不列計為受扶助家屬<ul style="list-style-type: cjk-ideographic;"><li> 應徵（召）服兵役。但研發或產業訓儲替代役役男第三階段服役期間 之工作收入，應予列計。 </li><li>榮民領有院外就養生活費。</li><li>在學領有公費。</li><li>入獄服刑、因案遭受羈押或依法受拘禁。</li><li>失蹤經向警察機關報案協尋未獲達六個月以上。但遭遇特別災難失蹤 經證明者，不在此限。</li><li>經政府公費安置收容並負擔其全部費用。</li><li>尚未設有戶籍之非本國籍配偶或大陸地區配偶。</li><li>未共同生活且無扶養事實之特殊境遇單親家庭直系血親尊親屬。</li><li>未與單親家庭未成年子女共同生活、無扶養事實，且未行使、負擔其 對未成年子女權利義務之父或母。</li><li>因父母離異而未共同生活且無扶養事實之兄弟姐妹。</li><li>因其他情形特殊，未履行扶養義務，致申請人生活陷於困境，經直 轄市、縣（市）主管機關訪視評估以役男家屬最佳利益考量，認定 以不列入應計算人口為宜。</li></ul></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>
<div id="P3-3-Modal" class="modal fade Modal-info-blue" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">全戶所得限額</h4>
      </div>
      <div class="modal-body">
        <p>家庭總收入，指役男與其家屬之存款利息、動產及不動產收益、研發或產業訓儲替代役役男第三階段服役期間之工作收入扣除其戶籍所在地當年最低生活費後之淨額、其他收入及役男家屬工作收入之總額。但社會救助給付之收入，不列入家庭總收入計算。</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>
<div id="P3-4-Modal" class="modal fade Modal-info-blue" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">全戶動產限額</h4>
      </div>
      <div class="modal-body">
        <p>役男(含)及其家屬存款本金、投資及有價證券按面額計算之合計金額未超過一人時為新臺幣二百五十萬元；每增加一人，增加新臺幣二十五萬元。</p><br>
        <p>例如：某役男之家屬為父親、母親、妹妹三人。則全戶動產限額為250萬元 + 25萬 X 3 = 325萬元整。</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>
<div id="P3-5-Modal" class="modal fade Modal-info-blue" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">全戶不動產限額</h4>
      </div>
      <div class="modal-body">
        <p>不動產限額之規定如下：<ul style="list-style-type: cjk-ideographic;"><li> 不動產：以內政部或直轄市政府依社會救助法施行細則第二條公告之當年度不動產限額計算。但役男及其家屬之自用住宅（含該基地）及未產生經濟效益之土地不列入。 </li><li>前項所稱自用住宅，指役男家屬所有，供自己居住使用之住宅，並已辦竣戶籍登記者；如有二棟以上自用住宅時，僅能以其中一棟房屋現值及土地公告現值較低者免予列入不動產計算。未產生經濟效益土地之認定，準用社會救助法第五條之二規定。</li><li> 役男家屬有不動產分別座落於不同直轄市或縣（市）政府轄區內者，其不動產限額，以經公告之當年度限額較低者為計算基準。</li><li> 106年度各縣市不動產限額如下表</li></ul><div class="row office_list">
					<table class="table table-condensed table-responsive" style="width: 90%; margin: auto;">
						<thead>
							<tr>
								<th>縣市別</th><th>不動產限額</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>臺北市</td><td>740萬元整</td></tr>
							<tr><td>新北市</td><td>362萬元整</td></tr>
							<tr><td>桃園市</td><td>360萬元整</td></tr>
							<tr><td>臺中市</td><td>352萬元整</td></tr>
							<tr><td>臺南市</td><td>350萬元整</td></tr>
							<tr><td>高雄市</td><td>353萬元整</td></tr>
							<tr><td>基隆市</td><td>350萬元整</td></tr>
							<tr><td>新竹縣</td><td>350萬元整</td></tr>
							<tr><td>苗栗縣</td><td>350萬元整</td></tr>
							<tr><td>彰化縣</td><td>350萬元整</td></tr>
							<tr><td>雲林縣</td><td>350萬元整</td></tr>
							<tr><td>嘉義縣</td><td>350萬元整</td></tr>
							<tr><td>屏東縣</td><td>350萬元整</td></tr>
							<tr><td>宜蘭縣</td><td>350萬元整</td></tr>
							<tr><td>花蓮縣</td><td>350萬元整</td></tr>
							<tr><td>臺東縣</td><td>350萬元整</td></tr>
							<tr><td>金門縣</td><td>270萬元整</td></tr>
							<tr><td>連江縣</td><td>270萬元整</td></tr>
						</tbody>
					</table>
				</div></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>
<div id="P3-6-Modal" class="modal fade Modal-info-blue" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">為何調閱我的財稅資料?</h4>
      </div>
      <div class="modal-body">
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
<div id="P3-next-Modal" class="modal fade" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color: rgba(39, 98, 111, 0.95);">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: white;">試算結果</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
	        <div class="col-sm-12 form-group" id="home_page3" aria-expanded="true" style="overflow: hidden; transition: 2s;"> 
				<div class="form-group" aria-expanded="false" style="">
					
					<div name="home_result" class="form-control required digits" type="tel" id="home_result" style="    height: 8em; line-height: 2; font-size: 16px;">貴戶可能符合</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<a class="btn btn-lg alert-link" href="#" id="show_form_bt" style="margin-bottom: 1em; text-align: center;display: block; background: #26466a;">立刻申請</a>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-lg alert-link" data-dismiss="modal" style="text-align: center;display: block; background: #6a263b;">關閉視窗</a>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<div id="P3-result-Modal" class="modal fade Modal-info-green" role="dialog" style="/*align-items: center; display: flex;*/">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">申請結果</h4>
      </div>
      <div class="modal-body result">
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
	function CheckENInput(){
        $("#P3-S1 select").each(function(index, el) {
            if((this.value == "" || this.value == null)){
                $(this).addClass('EW');
            }else{
                $(this).removeClass('EW');
            }
        });
    }
	$("#scrollTarget > ul > li").eq(3).addClass('active');
	$("body").stop().animate({scrollTop:0}, 500, 'swing');
</script>

	</body>
</html>
