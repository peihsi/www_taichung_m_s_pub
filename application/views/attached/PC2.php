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
.ctaBox-2.color2 {
    background-color: #F7F7F7;
    color: #444;
}
.ctaBox-2 {
    border: 2px solid rgba(0,0,0,0.05);
}
.ctaBox-2 {
    padding: 33px 11px;
}
.office_list .btn{
    border: 0px;
    width: 100%;
}
.row .office_list .col-md-3{
    margin-bottom: 15px;
}
</style>
<header id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-8">
                    <h1>臺中各地區公所</h1>
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
                <div class="row office_list2">
                    <select>
                        <option>中區區公所</option>
                        <option>東區區公所</option>
                        <option>西區區公所</option>
                        <option>南區區公所</option>
                        <option>北區區公所</option>
                        <option>西屯區公所</option>
                        <option>南屯區公所</option>
                        <option>北屯區公所</option>
                        <option>豐原區公所</option>
                        <option>大里區公所</option>
                        <option>太平區公所</option>
                        <option>清水區公所</option>
                        <option>沙鹿區公所</option>
                        <option>大甲區公所</option>
                        <option>東勢區公所</option>
                        <option>梧棲區公所</option>
                        <option>烏日區公所</option>
                        <option>神岡區公所</option>
                        <option>大肚區公所</option>
                        <option>大雅區公所</option>
                        <option>后里區公所</option>
                        <option>霧峰區公所</option>
                        <option>潭子區公所</option>
                        <option>龍井區公所</option>
                        <option>外埔區公所</option>
                        <option>和平區公所</option>
                        <option>石岡區公所</option>
                        <option>大安區公所</option>
                        <option>新社區公所</option>
                    </select>
                    
                </div>
                <!--<div class="row office_list">
                    <div class="col-md-3"><a href="#office_locate" class="btn" id="btn123"><i class="icon-location"></i>中區區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>東區區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>西區區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>南區區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>北區區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>西屯區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>南屯區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>北屯區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>豐原區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>大里區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>太平區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>清水區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>沙鹿區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>大甲區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>東勢區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>梧棲區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>烏日區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>神岡區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>大肚區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>大雅區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>后里區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>霧峰區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>潭子區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>龍井區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>外埔區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>和平區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>石岡區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>大安區公所</a></div>
                    <div class="col-md-3"><a href="#office_locate" class="btn"><i class="icon-location"></i>新社區公所</a></div>

                </div>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="color4 ctaBox-2 col-md-12" id="office_locate" style="border-radius: 4px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2><strong>中區區公所</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <iframe  width="100%" height="600" frameborder="0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1051.6014266516638!2d120.67950230379242!3d24.143733596833172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4f731237deaa9639!2z5Lit5Y2A5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446131455639"></iframe><br>
                                    <br>
                                    <h2><strong><a href="http://www.central.taichung.gov.tw/" target="_blank">中區公所官方網站</a></strong></h2><br>
                                    <h2><strong><a href="tel:+886422222502">04-2222-2502</a></strong></h2><br>
                                    <h2><strong>40044 臺中市中區成功路300號3樓</strong></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> 

</div>

				<?php $this->view('one_bottom.php') ?>
<script type="text/javascript">
var MAP_A = new Array();
MAP_A["中區區公所"]=["http://www.central.taichung.gov.tw/",  "tel:+886422222502",    "04-2222-2502",     "40044 臺中市中區成功路300號3樓","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1051.6014266516638!2d120.67950230379242!3d24.143733596833172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4f731237deaa9639!2z5Lit5Y2A5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446131455639"];
MAP_A["東區區公所"]=["http://www.east.taichung.gov.tw/", "tel:+886422151988",    "04-2215-1988",     "40149 臺中市東區長福路245號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.002655574442!2d120.7014503143358!3d24.136544879833444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d362bb8e415%3A0x976a68560db38359!2z5p2x5Y2A5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446131957887"];
MAP_A["西區區公所"]=["http://www.west.taichung.gov.tw/", "tel:+886422245200",    "04-2224-5200",     "40345 臺中市西區金山路11號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.865963666082!2d120.66887031433586!3d24.14134487964719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d0b78049d9f%3A0x18313de0109df1e1!2z6KW_5Y2A5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446134805819"];
MAP_A["南區區公所"]=["http://www.south.taichung.gov.tw/",    "tel:+886422636596",    "04-2263-6596",     "40245 臺中市南區工學路72號3樓","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.554809970443!2d120.66140081433542!3d24.11714658058521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c565b908b91%3A0x9958390f422496ee!2z5Y2X5Y2A5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446134779848"];
MAP_A["北區區公所"]=["http://www.north.taichung.gov.tw/",    "tel:+886422314031",    "04-2231-4031",     "40465 臺中市北區永興街301號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.1635912215993!2d120.6799233143363!3d24.165994878690956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917d923ec0f1d%3A0x38132275ed3c82f1!2z5YyX5Y2A5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446143831707"];
MAP_A["西屯區公所"]=["http://www.xitun.taichung.gov.tw/",    "tel:+886422556333",    "04-2255-6333",     "40755 臺中市西屯區市政北二路386號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.1802992643993!2d120.63136691433643!3d24.165408778713697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693df057dd016b%3A0x3d2f8c073390fcc1!2z6KW_5bGv5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446134838877"];
MAP_A["南屯區公所"]=["http://www.nantun.taichung.gov.tw/",   "tel:+886424752799",    "04-2475-2799",     "40877 臺中市南屯區永春東路679號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d743.6484779333127!2d120.64401120516028!3d24.13445305269132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0351e0ab150c0d00!2z5Y-w5Lit5biC5Y2X5bGv5Y2A5oi25pS_5LqL5YuZ5omA!5e0!3m2!1szh-TW!2stw!4v1446134957506"];
MAP_A["北屯區公所"]=["http://www.beitun.taichung.gov.tw/",   "tel:+886424606000",    "04-2460-6000",     "40673 臺中市北屯區崇德路三段10號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.6793458613597!2d120.68434431433691!3d24.182975878031677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917c07bfcb625%3A0x99292ca981ff9fcc!2z5YyX5bGv5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446134980381"];
MAP_A["豐原區公所"]=["http://www.fengyuan.taichung.gov.tw/","tel:+886425222106", "04-2522-2106",     "42082 臺中市豐原區市政路2號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.9867045834135!2d120.71604131433796!3d24.24224377572711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691a02244c269d%3A0x4ac54c7647d14420!2z6LGQ5Y6f5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446134998502"];
MAP_A["大里區公所"]=["http://www.dali.taichung.gov.tw/", "tel:+886424063979",    "04-2406-3979",     "41261 臺中市大里區大新街36號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.0603210920076!2d120.6756538143351!3d24.099374081273538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c92a986bf1b%3A0x6e37f99101c29cf7!2z5aSn6YeM5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135020216"];
MAP_A["太平區公所"]=["http://www.taiping.taichung.gov.tw/",  "tel:+886422794157",    "04-2279-4157",     "41142 臺中市太平區中平路144號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.291617854729!2d120.71617231433565!3d24.12639488022686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346922ce9a41276b%3A0x8a4b2a576390d988!2z5aSq5bmz5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135041124"];
MAP_A["清水區公所"]=["http://www.qingshui.taichung.gov.tw/","tel:+886426270151", "04-2627-0151",     "43648 臺中市清水區中社里鎮政路101號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.2377547258593!2d120.55761131433854!3d24.268424874707488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469149b091abe1d%3A0x141588c5fce6ff5f!2z5Y-w5Lit5biC5riF5rC05Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135063748"];
MAP_A["沙鹿區公所"]=["http://www.shalu.taichung.gov.tw/",    "tel:+886426622101",    "04-2662-2101",     "43352 臺中市沙鹿區北勢里鎮政路8號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.2453310775168!2d120.56402941433777!3d24.23319677607915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346914fdbaffddd3%3A0xe14ceb2046a97050!2z5rKZ6bm_5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135095416"];
MAP_A["大甲區公所"]=["http://www.dajia.taichung.gov.tw/",    "tel:+886426872101",    "04-2687-2101",     "43748 臺中市大甲區民權路52號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.925494192794!2d120.62027931434018!3d24.349087871559636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34690e004e87926f%3A0xb47e86a648e31aff!2z5aSn55Sy5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135123896"];
MAP_A["東勢區公所"]=["http://www.dongshi.taichung.gov.tw/",  "tel:+886425872106",    "04-2587-2106~8",   "臺中市東勢區北興里豐勢路518號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.5198182273043!2d120.8257343143383!3d24.25856787509142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691c5ff6665145%3A0xe950f82eda6901ac!2z5p2x5Yui5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135169520"];
MAP_A["梧棲區公所"]=["http://www.wuqi.taichung.gov.tw/", "tel:+886426564311",    "04-2656-4311",     "43548 臺中市梧棲區中和街66號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.625439133765!2d120.52943431433822!3d24.254875875235214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346914cc77099cd3%3A0x90ad93e23e0fdb8a!2z5qKn5qOy5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135188655"];
MAP_A["烏日區公所"]=["http://www.wuri.taichung.gov.tw/", "tel:+886423368016",    "04-23368016",      "414 臺中市烏日區新興路316號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.9111489193374!2d120.62162431433515!3d24.104619881070313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c1c4427e8f3%3A0x9db90ae7c6715ab9!2z54OP5pel5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135216052"];
MAP_A["神岡區公所"]=["http://www.shengang.taichung.gov.tw/","tel:+886425620841", "04-2562-0841",     "42955 臺中市神岡區神岡路30號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.5366436305862!2d120.65923291433828!3d24.257979775114425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469112be66caaaf%3A0x5623367aa0571e01!2z56We5bKh5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135240777"];
MAP_A["大肚區公所"]=["http://www.dadu.taichung.gov.tw/", "tel:+886426991105",    "04-26991105",      "43242 臺中市大肚區沙田路二段646號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.582762125608!2d120.54339651433615!3d24.151286779261653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693f9e0e59e74b%3A0x1e817a3eb2683473!2z5aSn6IKa5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135266983"];
MAP_A["大雅區公所"]=["http://www.daya.taichung.gov.tw/", "tel:+886425663316",    "04-25663316",      "42869 臺中市大雅區雅環路二段301號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.36125045735!2d120.64562731433764!3d24.229140776237042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346916ec0905afc3%3A0xe4befa649ea3b350!2z5aSn6ZuF5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135284189"];
MAP_A["后里區公所"]=["http://www.houli.taichung.gov.tw/",    "tel:+886425562116",    "04-25562116",      "臺中市421后里區墩西里公安路84號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636.1916618923888!2d120.70855331433938!3d24.304948873283358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469107540335827%3A0xe59173e170bb8ced!2z6Ie65Lit5biC5ZCO6YeM5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135306650"];
MAP_A["霧峰區公所"]=["http://www.wufeng.taichung.gov.tw/",   "tel:+886423302147",    "(04)23397128、(04)23302147、(04)23397048、(04)23308549、(04)23308614","41343 臺中市霧峰區本堂里大同路20號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.1491836928817!2d120.6980230143342!3d24.061050482756094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469235a96380e3b%3A0xb0379ed86be98766!2z5Y-w5Lit5biC6Zyn5bOw5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135334447"];
MAP_A["潭子區公所"]=["http://www.tanzi.taichung.gov.tw/",    "tel:+886425331160",    "04-25331160",      "42755 臺中市潭子區中山路二段239號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.922666790759!2d120.70298331433736!3d24.20948787700135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469177b6c20b3d3%3A0x5b942113be90cef5!2z5r2t5a2Q5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135392173"];
MAP_A["龍井區公所"]=["http://www.longjing.taichung.gov.tw/","tel:+886426352411", "04-26352411",      "43452 臺中市龍井區沙田路四段247號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.4077251792514!2d120.54361131433693!3d24.19249587766188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693fe1fae986fd%3A0x7ea7f193ba6a3a46!2z6b6N5LqV5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135409828"];
MAP_A["外埔區公所"]=["http://www.waipu.taichung.gov.tw/",    "tel:+886426832216",    "04-2683-2216",     "43857 臺中市外埔區六分路390號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.41461529452!2d120.6521963143398!3d24.33204587222546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346911da804215ab%3A0xfbd5c28c09f8b4c!2z5aSW5Z-U5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135430803"];
MAP_A["和平區公所"]=["http://www.heping.taichung.gov.tw/",   "tel:+886425941501",    "04-25941501",      "42441 臺中市和平區南勢里東關路3段156號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.9003486668776!2d120.88139221433666!3d24.175227378332455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691e3b25564305%3A0x7cc0b07cb6d14c1a!2z5ZKM5bmz5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135445499"];
MAP_A["石岡區公所"]=["http://www.shigang.taichung.gov.tw/",  "tel:+886425722511",    "04-25722511",      "42265 臺中市石岡區豐勢路1033號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.0522701609484!2d120.77808071433867!3d24.274904774454946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691b0ca6f85609%3A0xa1ba87abdf2d0bd6!2z55-z5bKh5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135463771"];
MAP_A["大安區公所"]=["http://www.daan.taichung.gov.tw/", "tel:+886426713511",    "04-26713511",      "43951 臺中市大安區中庄里中山南路356號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.0105581192865!2d120.58441831434008!3d24.346124871675432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346912706bec5cb1%3A0xc568904a2807bba0!2z5aSn5a6J5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135492383"];
MAP_A["新社區公所"]=["http://www.xinshe.taichung.gov.tw/",   "tel:+886425811111",    "04-25811111",      "426 臺中市新社區復盛里興社街二段28之1號","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.2234626830236!2d120.80722731433782!3d24.23396187604949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691c092c3539b9%3A0x55a93500846037d7!2z5paw56S-5Y2A5YWs5omA!5e0!3m2!1szh-TW!2stw!4v1446135513377"];

    $(".office_list").on('click','a', function(event) {
        //event.preventDefault();
        var M_index = $(this).text();
          $("#office_locate iframe").attr('src', MAP_A[M_index][4]);
          $("#office_locate h2").eq(0).find('strong').text(M_index);
          $("#office_locate h2").eq(1).find('a').attr('href', MAP_A[M_index][0]);
          $("#office_locate h2").eq(1).find('a').text(M_index+"官方網站");
          $("#office_locate h2").eq(2).find('a').attr('href', MAP_A[M_index][1]);
          $("#office_locate h2").eq(2).find('a').text(MAP_A[M_index][2]);
          $("#office_locate h2").eq(3).find('strong').text(MAP_A[M_index][3]);
    });
    $(".office_list2").on('change','select', function(event) {
        //event.preventDefault();
        var M_index = $(this).val();
        console.log(M_index);
          $("#office_locate iframe").attr('src', MAP_A[M_index][4]);
          $("#office_locate h2").eq(0).find('strong').text(M_index);
          $("#office_locate h2").eq(1).find('a').attr('href', MAP_A[M_index][0]);
          $("#office_locate h2").eq(1).find('a').text(M_index+"官方網站");
          $("#office_locate h2").eq(2).find('a').attr('href', MAP_A[M_index][1]);
          $("#office_locate h2").eq(2).find('a').text(MAP_A[M_index][2]);
          $("#office_locate h2").eq(3).find('strong').text(MAP_A[M_index][3]);
    });
</script>
	</body>
</html>