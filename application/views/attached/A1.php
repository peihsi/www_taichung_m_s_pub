<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<?php $this->view('one_top_noheader.php') ?>

<div id="portfolioSheetWrapper">
	<header id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-8">
                    <h1>安家費與三節慰問金標準</h1>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="javascript:window.history.back();" class="btn pull-right"><i class="icon-cancel-outline"></i>返回</a>
                </div>
            </div>
        </div>
    </header>
	<section class="content">
        <div class="container">
            <section class="row slice">
            <div class="container mb15">
                <div class="row office_list">
                	役男徵集服役達1個月以上者，依核列等級，按其役期長短發給一次安家費及春節、端午、中秋等三節生活扶助金。<br>
					<table class="table table-striped table-hover table-condensed table-responsive">
						<thead>
							<tr>
								<th>級別</th><th>常備役</th><th>軍事訓練</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>甲級每1口</td><td>15,400元</td><td>20,520元</td></tr>
							<tr><td>乙級每1口</td><td>9,300元</td><td>12,320元</td></tr>
							<tr><td>丙級每1口</td><td>4,650元</td><td>6,160元</td></tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="container mb15">
                <div class="row office_list">
                	83年1月1日以後出生徵集入營接受常備兵役軍事訓練、常備役體位役男申請服替代役或替代役體位申請服宗教因素替代役，於服役達2個月以上者，依核列等級，發給一次安家費。<br>
					<table class="table table-striped table-hover table-condensed table-responsive">
						<thead>
							<tr>
								<th>級別</th><th>役期4個月者</th><th>役期6個月者</th><th>役期10個月者</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>甲級每1口</td><td>20,520元</td><td>30,780元</td><td>51,300元</td></tr>
							<tr><td>乙級每1口</td><td>12,320元</td><td>18,470元</td><td>30,780元</td></tr>
							<tr><td>丙級每1口</td><td>6,160元</td><td>9,240元</td><td>15,400元</td></tr>
						</tbody>
					</table>
				</div>
			</div>
			</section>
		</div>
	</section>
</div>
				<?php $this->view('one_bottom.php') ?>

		<script type="text/javascript">
			$("#scrollTarget > ul > li").eq(1+1).addClass('active');
		</script>

	</body>
</html>