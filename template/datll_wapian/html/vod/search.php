

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
 <title>{$param.wd}{$param.actor}{$param.director}{$param.area}{$param.lang}{$param.year}{$param.class}搜索结果 - {$maccms.site_name}</title>
    <meta name="keywords" content="{$param.wd}{$param.actor}{$param.director}{$param.area}{$param.lang}{$param.year}{$param.class}搜索结果" />
    <meta name="description" content="{$param.wd}{$param.actor}{$param.director}{$param.area}{$param.lang}{$param.year}{$param.class}搜索结果" />
 {include file="public/include"}
<link rel='stylesheet' id='main-css'  href='{$maccms.path_tpl}css/movie.css' type='text/css' media='all' />

</head>
<body class="page-template page-template-pages page-template-posts-film page-template-pagesposts-film-php page page-id-9">

{include file="public/head"}
	
<div class="header_end"></div>
<section class="container">
  <div class="fenlei">
    <div class="b-listfilter" style="padding: 0px;">
      <style>
#noall{
	background-color: #aik651;
    color: #fff;
}
</style>
<div class="bread-crumb-nav fn-clear">
    <ul class="bread-crumbs">
        <li class="home"><a href="{$maccms.path}">首页</a></li>
        <li>搜索" <strong style="color:#4c8fe8;">{$param.wd}{$param.actor}{$param.director}{$param.area}{$param.lang}{$param.year}{$param.class}</strong>" 结果 " <strong style="color:#4c8fe8" class="mac_total"></strong>" 个资源</li>
        <li class="back"><a href="javascript:MAC.GoBack()">返回上一页</a></li>
    </ul>
</div>
      
    </div>
  </div>
  <div class="m-g">
    <div class="b-listtab-main">
      <div>
        <div>
          <div class="s-tab-main">
            <ul class="list g-clear">
					
					 {maccms:vod num="48" paging="yes" pageurl="vod/search" order="desc" by="time"}
                  <li class='item'>
                    <a class='js-tongjic' href='{:mac_url_vod_detail($vo)} ' title='{$vo.vod_name}'>
                      <div class='cover g-playicon'>
                        <img src='{:mac_url_img($vo.vod_pic)}' alt='{$vo.vod_name}' />
                        <span class='pay'>{$vo.type.type_name}</span>
                        <span class='hint'>{$vo.vod_remarks}</span></div>
                      <div class='detail'>
                        <p class='title g-clear'>
                          <span class='s1'>{$vo.vod_name}</span>
                          <span class='s2'>{$vo.vod_score}</span></p>
                        <p class='star'>{$vo.vod_actor} </p></div>
                    </a>
                  </li>
                     {/maccms:vod}
				    
				  </ul>
          </div>
        </div>
      </div>
		<div class="paging"></div>
       {include file="public/paging"}
    </div>
  </div>
</section>
{include file="public/foot"}
<script type='text/javascript' src='{$maccms.path_tpl}js/main.js'></script> 
<!--<script type="text/javascript"> document.body.oncontextmenu=document.body.ondragstart= document.body.onselectstart=document.body.onbeforecopy=function(){return false;};
document.body.onselect=document.body.oncopy=document.body.onmouseup=function(){document.selection.empty();}; </script>-->

</body>
</html>
 <script>
        $('.mac_total').html('{$__PAGING__.record_total}');
    </script>
<!--精仿挖片网免费模板
采集联盟网络技术工作室
作者：金刚狼
qq：834023388
专业承接苹果cms 10x版本 模板制作
全网唯一官网http://shop.datll.com-->