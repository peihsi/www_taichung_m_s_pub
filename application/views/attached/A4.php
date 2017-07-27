<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<?php $this->view('one_top_noheader.php') ?>

<div id="portfolioSheetWrapper" style="">
	<header id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-8">
                    <h1>106年度-各縣市每月最低生活費標準</h1>
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
					<table class="table table-striped table-hover table-condensed table-responsive">
						<thead>
							<tr>
								<th>縣市別</th><th>最低生活費</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>臺北市</td><td>15,544元整</td></tr>
							<tr><td>新北市</td><td>13,700元整</td></tr>
							<tr><td>桃園市</td><td>13,692元整</td></tr>
							<tr><td>臺中市</td><td>13,084元整</td></tr>
							<tr><td>臺南市</td><td>11,448元整</td></tr>
							<tr><td>高雄市</td><td>12,941元整</td></tr>
							<tr><td>基隆市</td><td>11,448元整</td></tr>
							<tr><td>新竹縣</td><td>11,448元整</td></tr>
							<tr><td>苗栗縣</td><td>11,448元整</td></tr>
							<tr><td>彰化縣</td><td>11,448元整</td></tr>
							<tr><td>雲林縣</td><td>11,448元整</td></tr>
							<tr><td>嘉義縣</td><td>11,448元整</td></tr>
							<tr><td>屏東縣</td><td>11,448元整</td></tr>
							<tr><td>宜蘭縣</td><td>11,448元整</td></tr>
							<tr><td>花蓮縣</td><td>11,448元整</td></tr>
							<tr><td>臺東縣</td><td>11,448元整</td></tr>
							<tr><td>金門縣</td><td>10,290元整</td></tr>
							<tr><td>連江縣</td><td>10,290元整</td></tr>
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