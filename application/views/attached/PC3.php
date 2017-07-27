<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
    <?php $this->view('one_top_noheader.php') ?>

<div id="portfolioSheetWrapper">
<style type="text/css">
    .popover-content{
        color: black;
    }
    h3.popover-title{
        color: black !important;
        font-weight: 800;
        font-size: 1.2em;
    }
</style>
<header id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-8">
                    <h1>應備文件</h1>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="javascript:window.history.back();" class="btn pull-right"><i class="icon-cancel-outline"></i>返回</a>
                </div>
            </div>
        </div>
    </header>

        <section class="content">
        <div class="container">

            <div class="row color4" id="process-fig-row">
                            <br><br><br>
                            <div class="col-md-12 col-sm-12" style="text-align: center;">
                                <img style="width: 100%" id="Image-Maps-Com-image-maps-2016-12-21-231457" src="/One_page/images/ilovepdf_com (white).svg">
                                <div style="position: absolute;top: 20%;left: 20%;width: 23%;height: 7.5%;/*background-color: rgba(178, 78, 78, 0.59);*/"   data-toggle="popover" title="需準備的文件" data-content="戶口名簿/戶籍謄本
財產總歸戶清單
全戶所得清單
學生證/在學證明/錄取通知
診斷證明/身心障礙證明/重大傷病證明" ></div>
                                <div style="position: absolute;top: 37%;left: 22%;width: 21%;height: 9%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="由承辦人初步審核" data-original-title="初審階段"></div>
                                <div style="position: absolute;top: 37%;left: 48.2%;width: 21%;height: 9%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="若發現資料不齊，承辦人將民眾通知補件" data-original-title="通知補件"></div>
                                <div style="position: absolute;top: 35.5%;left: 72.2%;width: 23%;height: 13.5%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="所有文件與資訊將被檢查驗證與計算" data-original-title="補件審查"></div>
                                <div style="position: absolute;top: 53.5%;left: 72.2%;width: 23%;height: 8.5%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="若不符資格，將通知民眾申請駁回" data-original-title="駁回申請"></div>
                                <div style="position: absolute;top: 49.5%;left: 22%;width: 21%;height: 11%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="經過區公所承辦人、業務主管、區長審核通過之案件，將再向上提報給民政局" data-original-title="陳報民政局"></div>
                                <div style="position: absolute;top: 66.5%;left: 26%;width: 13%;height: 6%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="線上電子收文" data-original-title="收件"></div>
                                <div style="position: absolute;top: 76.5%;left: 22%;width: 21%;height: 8.5%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="民政局複審區公所提交之民眾申請案與相關附件" data-original-title="審查資料"></div>
                                <div style="position: absolute;top: 88.5%;left: 18%;width: 29%;height: 11.5%;/*background-color: rgba(178, 78, 78, 0.59);*/" data-toggle="popover" title="" data-content="將最後複審結果通知民眾" data-original-title="函覆申請人"></div>
                            </div>
                        </div>
                <!-- call to action -->


        <!-- call to action -->
    </section> 
<script type="text/javascript">
    $('[data-toggle="popover"]').popover(); 
        $("#process-fig-row").on('click', function (e) {
           $('[data-toggle="popover"],[data-original-title]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {                
                (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
            }

        });
    });
</script>
</div>
                <?php $this->view('one_bottom.php') ?>

        <script type="text/javascript">
            $("#scrollTarget > ul > li").eq(1+1).addClass('active');
        </script>

    </body>
</html>