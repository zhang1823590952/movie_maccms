<header class="header">
  <div class="container">
    <h1 class="logo"><a href="/" title="{$maccms.site_name}"><span>{$maccms.site_name}</span></a></h1>
    <div class="sitenav">
      <ul>
		  
        <li id="menu-item-18" class="menu-item"><a {if condition="($maccms.aid==1) "} class="menu-itema-two"{else /}{/if}   href="/">首页</a> </li>
		  {maccms:type ids="parent" order="asc" by="sort"}
        <li id="menu-item-{$vo.type_id}" class="menu-item"><a {if condition="($obj.type_name==$vo.type_name) "} class="menu-itema-two"{else /}{/if} href="{:mac_url_type($vo)}">{$vo.type_name}</a></li>
		   {/maccms:type}
       
      </ul>
    </div>
    <span class="sitenav-on"><i class="icon-list"></i></span> <span class="sitenav-mask"></span>
      
      {if false}
    <div class="accounts">
        <a class="account-weixin" href="javascript:;"><i class="fa"></i>
      <div class="account-popover">
        <div class="account-popover-content"><img src="{$maccms.path_tpl}images/qrcode.png"></div>
      </div>
      </a>
    </div>
      {/if}
      
    <span class="searchstart-on"><i class="icon-search"></i></span> <span class="searchstart-off"><i class="icon-search"></i></span>
    <form class="searchform"  name="search" method="POST" action="{:mac_url('vod/search')}" method="post" id="search">
      <button tabindex="3" class="sbtn" type="submit"><i class="fa"></i></button>
      <input tabindex="2" class="sinput" name="wd" type="text" placeholder="输入关键字" value="">
    </form>
  </div>
</header>
<div class="header_end"></div>
<div id="homeso">
  <form method="post" id="soform" style="text-align: center;float: none"  name="search" action="{:mac_url('vod/search')}">
    <img id="imgsrc" style="margin:10px 0" src="{$maccms.path_tpl}images/sologo.png"><br>
    <br>
    <input tabindex="2" class="homesoin" id="sos" name="wd" type="text" placeholder="输入你要观看的视频" value="">
    <button id="button" tabindex="3" class="homesobtn" type="submit"><i class="fa">搜索</i></button>
  </form>
</div>
