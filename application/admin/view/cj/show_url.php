{include file="../../../application/admin/view/public/head" /}
<div class="page-container p10">
    <fieldset class="layui-elem-field">
        <legend>网址列表</legend>
        <div class="layui-field-box">
            {volist name="urls" id="vo"}
            <p>{$vo}</p>
            <hr>
            {/volist}
        </div>
    </fieldset>
</div>
{include file="../../../application/admin/view/public/foot" /}

<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;



    });

</script>

</body>
</html>