{include file="../../../application/admin/view/public/head" /}

<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="layui-btn-group">
            <a data-href="{:url('info')}" class="layui-btn layui-btn-primary j-iframe" data-width="800px" data-height="450px"><i class="layui-icon">&#xe654;</i>添加</a>
            <a data-href="{:url('del')}" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>删除</a>

                {if condition="$collect_break_vod neq ''"}
                <a href="{:url('load')}?flag=vod" class="layui-btn layui-btn-danger ">【进入视频断点采集】</a>
                {/if}
                {if condition="$collect_break_art neq ''"}
                <a href="{:url('load')}?flag=art" class="layui-btn layui-btn-danger ">【进入文章断点采集】</a>
                {/if}

        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="100">编号</th>
                <th width="100">接口类型</th>
                <th width="100">资源类型</th>
                <th>资源站</th>
                <th width="200">采集选项</th>
                <th width="100">操作</th>
            </tr>
            </thead>

            {volist name="list" id="vo"}
            <tr>
                <td><input type="checkbox" name="ids[]" value="{$vo.collect_id}" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td>{$vo.collect_id}</td>
                <td>{if condition="$vo['collect_type'] eq 1"}xml{else/}json{/if} </td>
                <td>{$vo.collect_mid|mac_get_mid_text}</td>
                <td><a class="layui-badge-rim" href="{:url('api')}?{:http_build_query(['ac'=>'list','cjflag'=>md5($vo.collect_url),'cjurl'=>$vo.collect_url,'h'=>'','t'=>'','ids'=>'','wd'=>'','type'=>$vo.collect_type,'mid'=>$vo.collect_mid,'param'=>base64_encode($vo.collect_param)])}" title="进入资源库">【{$vo.collect_name}】{$vo.collect_url}</a></td>
                <td>
                    <a class="layui-badge-rim" href="{:url('api')}?{:http_build_query(['ac'=>'cj','cjflag'=>md5($vo.collect_url),'cjurl'=>$vo.collect_url,'h'=>'24','t'=>'','ids'=>'','wd'=>'','type'=>$vo.collect_type,'mid'=>$vo.collect_mid,'param'=>base64_encode($vo.collect_param)])}" title="采集当天">采集当天</a>
                    <a class="layui-badge-rim" href="{:url('api')}?{:http_build_query(['ac'=>'cj','cjflag'=>md5($vo.collect_url),'cjurl'=>$vo.collect_url,'h'=>'168','t'=>'','ids'=>'','wd'=>'','type'=>$vo.collect_type,'mid'=>$vo.collect_mid,'param'=>base64_encode($vo.collect_param)])}" title="采集本周">采集本周</a>
                    <a class="layui-badge-rim" href="{:url('api')}?{:http_build_query(['ac'=>'cj','cjflag'=>md5($vo.collect_url),'cjurl'=>$vo.collect_url,'h'=>'','t'=>'','ids'=>'','wd'=>'','type'=>$vo.collect_type,'mid'=>$vo.collect_mid,'param'=>base64_encode($vo.collect_param)])}" title="采集所有">采集所有</a>
                </td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-href="{:url('info?id='.$vo['collect_id'])}" data-width="800px" data-height="450px" href="javascript:;" title="编辑">编辑</a>
                    <a class="layui-badge-rim j-tr-del" data-href="{:url('del?ids='.$vo['collect_id'])}" href="javascript:;" title="删除">删除</a>
                </td>
            </tr>
            {/volist}
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>
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