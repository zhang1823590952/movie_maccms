{include file="../../../application/admin/view/public/head" /}

<div class="page-container p10">

    <div class="my-toolbar-box">
        <div class="layui-btn-group">
            {if condition="$collect_break_vod neq ''"}
            <a href="{:url('load')}?flag=vod" class="layui-btn layui-btn-danger ">【进入视频断点采集】</a>
            {/if}
            {if condition="$collect_break_art neq ''"}
            <a href="{:url('load')}?flag=art" class="layui-btn layui-btn-danger ">【进入文章断点采集】</a>
            {/if}
            </div>
    </div>
    <hr>

    <script src="//www.maccms.com/union/xmlutf_2014.js" charset="utf-8"></script>

</div>

{include file="../../../application/admin/view/public/foot" /}
<script type="text/javascript">
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
                , layer = layui.layer;


    });
</script>
</body>
</html>