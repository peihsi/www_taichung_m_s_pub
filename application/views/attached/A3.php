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
                    <h1>各等級扶助標準</h1>
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
                <div class="row">
					<table class="table table-striped table-hover table-condensed table-responsive">
						<thead>
							<tr>
								<th>級別</th><th>所得判定標準</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>甲級</td><td>未達當地最低生活費標準10%者。</td></tr>
							<tr><td>乙級</td><td>已達當地最低生活費標準10%以上，未達70%者。</td></tr>
							<tr><td>丙級</td><td>已達當地最低生活費標準70%以上，未達最低生活費標準者。</td></tr>
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
