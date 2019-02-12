{include file="../../../application/admin/view/public/head" /}
<style>
    table {
        table-layout: fixed;
    }


    td {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>
<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="center mb10">
            <form class="layui-form " method="post">
                <input type="hidden" value="{$param.select}" name="select">
                <input type="hidden" value="{$param.input}" name="input">
                <div class="layui-input-inline w150">
                    <select name="type">
                        <option value="">选择分类</option>
                        {volist name="type_tree" id="vo"}
                        {if condition="$vo.type_mid eq 1"}
                        <option value="{$vo.type_id}" {if condition="$param['type'] eq $vo.type_id"}selected {/if}>{$vo.type_name}</option>
                        {volist name="vo.child" id="ch"}
                        <option value="{$ch.type_id}" {if condition="$param['type'] eq $ch.type_id"}selected {/if}>&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;{$ch.type_name}</option>
                        {/volist}
                        {/if}
                        {/volist}
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="status">
                        <option value="">选择状态</option>
                        <option value="0" {if condition="$param['status'] eq '0'"}selected {/if}>未审核</option>
                        <option value="1" {if condition="$param['status'] eq '1'"}selected {/if}>已审核</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="level">
                        <option value="">选择推荐</option>
                        <option value="9" {if condition="$param['level'] eq '9'"}selected {/if}>推荐9-幻灯</option>
                        <option value="1" {if condition="$param['level'] eq '1'"}selected {/if}>推荐1</option>
                        <option value="2" {if condition="$param['level'] eq '2'"}selected {/if}>推荐2</option>
                        <option value="3" {if condition="$param['level'] eq '3'"}selected {/if}>推荐3</option>
                        <option value="4" {if condition="$param['level'] eq '4'"}selected {/if}>推荐4</option>
                        <option value="5" {if condition="$param['level'] eq '5'"}selected {/if}>推荐5</option>
                        <option value="6" {if condition="$param['level'] eq '6'"}selected {/if}>推荐6</option>
                        <option value="7" {if condition="$param['level'] eq '7'"}selected {/if}>推荐7</option>
                        <option value="8" {if condition="$param['level'] eq '8'"}selected {/if}>推荐8</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="lock">
                        <option value="">选择锁定</option>
                        <option value="0" {if condition="$param['lock'] eq '0'"}selected {/if}>未锁定</option>
                        <option value="1" {if condition="$param['lock'] eq '1'"}selected {/if}>已锁定</option>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="weekday">
                        <option value="">选择周期</option>
                        {volist name=":explode(',',$GLOBALS['config']['app']['vod_extend_weekday'])" id="vo2" key="key2"}
                        <option value="{$vo2}" {if condition="$param['weekday'] eq $vo2"}selected {/if}>{$vo2}</option>
                        {/volist}
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="area">
                        <option value="">选择地区</option>
                        {volist name=":explode(',',$GLOBALS['config']['app']['vod_extend_area'])" id="vo2" key="key2"}
                        <option value="{$vo2}" {if condition="$param['area'] eq $vo2"}selected {/if}>{$vo2}</option>
                        {/volist}
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="lang">
                        <option value="">选择语言</option>
                        {volist name=":explode(',',$GLOBALS['config']['app']['vod_extend_lang'])" id="vo2" key="key2"}
                        <option value="{$vo2}" {if condition="$param['lang'] eq $vo2"}selected {/if}>{$vo2}</option>
                        {/volist}
                    </select>
                </div>


                <div class="layui-input-inline w150">
                    <select name="server">
                        <option value="">选择服务器</option>
                        {volist name="server_list" id="vo"}
                        <option value="{$vo.from}" {if condition="$param['server'] eq $vo.from"}selected{/if}>{$vo.show}</option>
                        {/volist}
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="player">
                        <option value="">选择播放器</option>
                        <option value="no" {if condition="$param['player'] eq 'no'"}selected{/if}>空播放组</option>
                        {volist name="player_list" id="vo"}
                        <option value="{$vo.from}" {if condition="$param['player'] eq $vo.from"}selected{/if}>{$vo.show}</option>
                        {/volist}
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="downer">
                        <option value="">选择下载器</option>
                        <option value="no" {if condition="$param['downer'] eq 'no'"}selected{/if}>空下载组</option>
                        {volist name="downer_list" id="vo"}
                        <option value="{$vo.from}" {if condition="$param['downer'] eq $vo.from"}selected{/if}>{$vo.show}</option>
                        {/volist}
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="pic">
                        <option value="">选择图片</option>
                        <option value="1" {if condition="$param['pic'] eq '1'"}selected{/if}>无图片</option>
                        <option value="2" {if condition="$param['pic'] eq '2'"}selected{/if}>远程图片</option>
                        <option value="3" {if condition="$param['pic'] eq '3'"}selected{/if}>同步出错图</option>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="order">
                        <option value="">选择排序</option>
                        <option value="vod_time" {if condition="$param['order'] eq 'vod_time'"}selected{/if}>更新时间</option>
                        <option value="vod_id" {if condition="$param['order'] eq 'vod_id'"}selected{/if}>编号</option>
                        <option value="vod_hits" {if condition="$param['order'] eq 'vod_hits'"}selected{/if}>总人气</option>
                        <option value="vod_hits_month" {if condition="$param['order'] eq 'vod_hits_month'"}selected{/if}>月人气</option>
                        <option value="vod_hits_week" {if condition="$param['order'] eq 'vod_hits_week'"}selected{/if}>周人气</option>
                        <option value="vod_hits_day" {if condition="$param['order'] eq 'vod_hits_day'"}selected{/if}>日人气</option>
                    </select>
                </div>


                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="请输入搜索条件" class="layui-input" name="wd" value="{$param['wd']}">
                </div>
                <input type="hidden" name="repeat" value="{$param['repeat']}" />
                <button class="layui-btn mgl-20 j-search" >查询</button>
            </form>
        </div>

        <div class="layui-btn-group">
            <a data-href="{:url('info')}" data-full="1" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i>添加</a>
            <a data-href="{:url('del')}" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>删除</a>
            <a data-href="{:url('index/select')}?tab=vod&col=type_id&tpl=select_type&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>分类</a>
            <a data-href="{:url('index/select')}?tab=vod&col=vod_level&tpl=select_level&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>推荐</a>
            <a data-href="{:url('index/select')}?tab=vod&col=vod_hits&tpl=select_hits&url=vod/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>点击</a>
            <a data-href="{:url('index/select')}?tab=vod&col=vod_status&tpl=select_status&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>状态</a>
            <a data-href="{:url('index/select')}?tab=vod&col=vod_lock&tpl=select_lock&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>锁定</a>
            <a class="layui-btn layui-btn-primary j-iframe" data-href="{:url('images/opt?tab=vod')}" href="javascript:;" title="同步远程图片"><i class="layui-icon">&#xe620;</i>同步图片</a>
            <a class="layui-btn layui-btn-primary j-iframe" data-checkbox="true" data-href="{:url('make/make?ac=info&tab=vod')}" href="javascript:;" title="生成页面"><i class="layui-icon">&#xe620;</i>生成页面</a>
            {if condition="$param.select eq 1"}
            <a data-href="" onclick="parent.onSelectResult('{$param.input}',$('.checkbox-ids:checked'))" class="layui-btn layui-btn-normal">选择返回</a>
            {/if}

            {if condition="$param['repeat'] neq ''"}
            <a data-href="{:url('del')}?repeat=1&retain=min" data-checkbox="no" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>一键删重[保留小ID]</a>
            <a data-href="{:url('del')}?repeat=1&retain=max" data-checkbox="no" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>一键删重[保留大ID]</a>
            {/if}
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="50">编号</th>
                <th >名称</th>
                <th width="50">人气</th>
                <th width="30">评分</th>
                <th width="30">推荐</th>
                <th width="30">浏览</th>
                <th width="80">播放器</th>
                <th width="120">更新时间</th>
                <th width="80">操作</th>
            </tr>
            </thead>

            {volist name="list" id="vo"}
            <tr>
                <td><input type="checkbox" name="ids[]" value="{$vo.vod_id}" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td>{$vo.vod_id}</td>
                <td>
                    [{$vo.type.type_name}] <a target="_blank" class="layui-badge-rim " href="{:mac_url_vod_detail($vo)}">{$vo.vod_name}</a>
                    {if condition="$vo.vod_status eq 0"} <span class="layui-badge">未审</span>{/if}
                    {if condition="$vo.vod_lock eq 1"} <span class="layui-badge">锁定</span>{/if}
                    {if condition="$vo.vod_isend eq 0 && $vo.vod_serial neq ''"} <span class="layui-badge layui-bg-blue">连载{$vo.vod_serial}</span>{/if}
                    {if condition="$vo.vod_remarks neq ''"} <span class="layui-badge layui-bg-orange">{$vo.vod_remarks}</span>{/if}
                </td>
                <td>{$vo.vod_hits}</td>
                <td>{$vo.vod_score}</td>
                <td><a data-href="{:url('index/select')}?tab=vod&col=vod_level&tpl=select_level&url=vod/field&ids={$vo.vod_id}" data-width="270" data-height="100" class=" j-select"><span class="layui-badge layui-bg-orange">{$vo.vod_level}</span></a></td>
                <td>{if condition="$vo.ismake eq 1"}<a target="_blank" class="layui-badge layui-bg-green " href="{:mac_url_vod_detail($vo)}">Y</a>{else/}<a class="layui-badge" href="{:url('make/make?ac=info&tab=vod')}?ids={$vo.vod_id}&ref=1">N</a>{/if}</td>
                <td><span title="{$vo.vod_play_from|str_replace='$$$',',',###}-{$vo.vod_down_from|str_replace='$$$',',',###}">{$vo.vod_play_from|str_replace='$$$',',',###}-{$vo.vod_down_from|str_replace='$$$',',',###}</span></td>
                <td>{$vo.vod_time|mac_day=color}</td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-full="1" data-href="{:url('info?id='.$vo['vod_id'])}" href="javascript:;" title="编辑">编辑</a>
                    <a class="layui-badge-rim j-tr-del" data-href="{:url('del?ids='.$vo['vod_id'])}" href="javascript:;" title="删除">删除</a>
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
    var curUrl="{:url('vod/data',$param)}";
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

    });
</script>
</body>
</html>