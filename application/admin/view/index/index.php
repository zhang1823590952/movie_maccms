{include file="../../../application/admin/view/public/head" /}

<style type="text/css">
    .hs-iframe{width:100%;height:100%;}
    .layui-tab{position:absolute;left:0;top:0;height:100%;width:100%;z-index:10;margin:0;border:none;overflow:hidden;}
    .layui-tab-title li:first-child > i {
        display: none;
    }
    .layui-tab-content{padding:0 0 0 10px;height:100%;}
    .layui-tab-item{height:100%;}
    .layui-nav-tree .layui-nav-child a{height:38px;line-height: 38px;}
    .footer{position:fixed;left:0;bottom:0;z-index:998;}
</style>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="fl header-logo">苹果CMS控制台</div>
        <div class="fl header-fold"><a href="javascript:;" title="打开/关闭左侧导航" class="aicon ai-caidan" id="foldSwitch"><i class="layui-icon">&#xe65f;</i></a></div>
        <ul class="layui-nav fl nobg main-nav">
            {volist name="menus" id="vo"}
            {if condition="($i eq 1)"}
            <li class="layui-nav-item layui-this">
                {else /}
            <li class="layui-nav-item">
                {/if}
                <a href="javascript:;">{$vo['name']}</a></li>
            {/volist}
        </ul>
        <ul class="layui-nav fr nobg head-info" lay-filter="">
            <li class="layui-nav-item">
                <a href="javascript:void(0);">{$Think.cookie.admin_name}&nbsp;&nbsp;</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:void(0);" id="lockScreen">锁屏</a></dd>
                    <dd><a href="{:url('index/logout')}">退出登陆</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="http://www.maccms.com/" target="_blank">官网</a></li>
            <li class="layui-nav-item"><a href="http://bbs.maccms.com/" target="_blank">论坛</a></li>

            <li class="layui-nav-item"><a href="__ROOT__/" target="_blank">前台</a></li>
            <li class="layui-nav-item"><a href="{:url('index/clear')}" class="j-ajax" refresh="yes">清缓存</a></li>

        </ul>
    </div>
    <div class="layui-side layui-bg-black" id="switchNav">
        <div class="layui-side-scroll">
            {volist name="menus" id="v"}
            {if condition="($i eq 1)"}
            <ul class="layui-nav layui-nav-tree">
                {else /}
                <ul class="layui-nav layui-nav-tree" style="display:none;">
                    {/if}
                    <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="{$v['icon']}"></i>{$v['name']}<span class="layui-nav-more"></span></a>

                    <dl class="layui-nav-child">
                        {volist name="v['sub']" id="vv" key="kk"}
                        <dd><a class="admin-nav-item" data-id="{$key}{$kk}" href="{$vv['url']}"><i class="{$vv['icon']}"></i> {$vv['name']}</a></dd>
                        {/volist}
                    </dl>
                    </li>
                </ul>
                {/volist}
        </div>
    </div>
    <div class="layui-body" id="switchBody">
        <div class="layui-tab layui-tab-card" lay-filter="macTab" lay-allowClose="true">
            <ul class="layui-tab-title">
                <li lay-id="111" class="layui-this">欢迎页面</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <iframe lay-id="111" src="{:url('index/welcome')}" width="100%" height="100%" frameborder="0" scrolling="yes" class="hs-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-footer footer">
        <div class="fl"></div>
        <div class="fr"> © 2008-2019 <a href="http://www.maccms.com/" target="_blank">MacCMS.COM.</a> All Rights Reserved.</div>
    </div>
</div>

{include file="../../../application/admin/view/public/foot" /}
<!--请在下方写此页面业务相关的脚本-->
<script>
    window.localStorage.clear();
    var LAYUI_OFFSET = 60;
</script>

<script type="text/javascript">
    layui.use(['element', 'layer'], function() {
        var $ = layui.jquery, element = layui.element, layer = layui.layer;
        $('.layui-tab-content').height($(window).height() - 145);
        var tab = {
            add: function(title, url, id) {
                element.tabAdd('macTab', {
                        title: title,
                        content: '<iframe width="100%" height="100%" lay-id="'+id+'" frameborder="0" src="'+url+'" scrolling="yes" class="x-iframe"></iframe>',
                        id: id
            });
            }, change: function(id) {
                element.tabChange('macTab', id);
            }
        };
        $('.admin-nav-item').click(function(event) {
            var that = $(this);
            var id = that.attr('data-id');
            if ($('iframe[lay-id="'+id+'"]')[0]) {
                tab.change(id);
                event.stopPropagation();
                $("iframe[lay-id='"+id+"']")[0].contentWindow.location.reload(true);//切换后刷新框架
                return false;
            }
            if ($('iframe').length == 10) {
                layer.msg('最多可打开10个标签页');
                return false;
            }
            that.css({color:'#fff'});
            tab.add(that.text(), that.attr('href'), that.attr('data-id'));
            tab.change(that.attr('data-id'));
            event.stopPropagation();
            return false;
        });
        $(document).on('click', '.layui-tab-close', function() {
            $('.layui-nav-child a[data-id="'+$(this).parent('li').attr('lay-id')+'"]').css({color:'rgba(255,255,255,.7)'});
        });
    });
</script>

</body>
</html>