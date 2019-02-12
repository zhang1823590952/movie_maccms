{include file="../../../application/admin/view/public/head" /}
<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="mb10">
            <div class="layui-input-inline w150 m5"><a href="javascript:;" data-id="" class="select_type red">查看全部资源</a></div>
            {volist name="type" id="vo"}
            <div class="layui-input-inline w150 m5">
                <a href="javascript:;" data-id="{$vo.type_id}" class="select_type">{$vo.type_name}</a>
                <a id="{$param['cjflag']}_{$vo.type_id}" data-href="{:url('index/select')}?tab=art&col={$param['cjflag']}_{$vo.type_id}&ids=1&tpl=select_type&refresh=no&url=collect/bind" data-width="270" data-height="100" class="j-select" >
                    {if condition="$vo.isbind eq 1"}
                    <span class="red">[{$vo.local_type_name}]</span>
                    {else}
                    [绑定]
                    {/if}
                </a>
            </div>
            {/volist}

        </div>

        <div class="center mb10">
            <form class="layui-form " method="">
                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="请输入搜索条件" class="layui-input" id="wd" name="wd" value="{$param['wd']}">
                </div>
                <button type="button" class="layui-btn mgl-20 j-btn" >查询</button>
            </form>
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th >名称</th>
                <th width="60">分类</th>
                <th width="60">来源</th>
                <th width="140">时间</th>
            </tr>
            </thead>

            {volist name="list" id="vo"}
            <tr>
                <td><input type="checkbox" name="ids[]" value="{$vo.art_id}" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td>{$vo.art_name}</td>
                <td>{$vo.type_name}</td>
                <td>{$vo.art_from}</td>
                <td>{$vo.art_time|mac_day=color}</td>
            </tr>
            {/volist}
            </tbody>
        </table>
        <div class="layui-btn-group">
            {php}
                $p1 = $param;
                unset($p1['ac']);
                $p1_str = http_build_query($p1);
            {/php}
            <a data-href="{:url('api')}?{$p1_str}&ac=cjsel" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i>采选中</a>
            <a data-href="{:url('api')}?{$p1_str}&h=24&ac=cjday" data-checkbox="no" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i>采当天</a>
            <a data-href="{:url('api')}?{$p1_str}&ac=cjall" data-checkbox="no" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i>采全部</a>
        </div>

        <div id="pages" class="center"></div>
    </form>

</div>


{include file="../../../application/admin/view/public/foot" /}

<script type="text/javascript">
    var curUrl="{:url('api')}?{$param_str}";
    layui.use(['laypage', 'layer','form'], function() {
        var laypage = layui.laypage
                , layer = layui.layer,
                form = layui.form;

        laypage.render({
            elem: 'pages'
            ,count: {$total}
            ,limit: {$limit}
            ,curr: {$page}
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });

        $('#wd').on('keydown', function (event) {
            if (event.keyCode == 13) {
                $('.j-btn').click();
                return false;
            }
        });

        $('.j-btn').click(function(){
           var wd = $('input[name="wd"]').val();
            var url = changeParam(curUrl,'wd',wd);
            location.href = url.replace('%7Bpage%7D',1).replace('%7Blimit%7D','');
        });

        $('.select_type').click(function(){
            var t = $(this).attr('data-id');
            var url = changeParam(curUrl,'t',t);
            location.href = url.replace('%7Bpage%7D',1).replace('%7Blimit%7D','');
        });

    });
    function onSubmitResult(res)
    {
        if(res.data.st==1){
            $('#'+res.data.id).html('<span class="red">['+ res.data.local_type_name +']</span>');
        }
        else{
            $('#'+res.data.id).html('[绑定]');
        }
    }
</script>
</body>
</html>