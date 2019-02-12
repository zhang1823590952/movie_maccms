{include file="../../../application/admin/view/public/head" /}
<div class="page-container p10">

    <form class="layui-form" method="post" action="">

        <div class="my-toolbar-box">

            <div class="center mb10">

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

            </div>

            <div class="center mb10">

                <div class="layui-input-inline w150">
                    <select name="player">
                        <option value="">选择播放器</option>
                        <option value="no">空播放组</option>
                        {volist name="player_list" id="vo"}
                        <option value="{$vo.from}">{$vo.show}</option>
                        {/volist}
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="downer">
                        <option value="">选择下载器</option>
                        <option value="no" >空下载组</option>
                        {volist name="downer_list" id="vo"}
                        <option value="{$vo.from}">{$vo.show}</option>
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

                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="请输入关键字" class="layui-input" name="wd" value="{$param['wd']}">
                </div>

            </div>

        </div>

        <fieldset class="layui-elem-field">
            <legend>批量删除</legend>
            <div class="layui-field-box">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label"><input type="radio" lay-ignore value="1" name="ck_del">删除数据</label>
                        <label class="layui-form-label"><input type="radio" lay-ignore value="2" name="ck_del">删播放组</label>
                        <label class="layui-form-label"><input type="radio" lay-ignore value="3" name="ck_del">删下载组</label>
                    </div>
                </div>

                <div class="layui-form-item">
                    <button type="button" class="layui-btn btn_submit">批量删除</button>
                </div>
            </div>
        </fieldset>

        <fieldset class="layui-elem-field">
        <legend>批量设置</legend>
        <div class="layui-field-box">

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_level" title="推荐">推荐</label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <select name="val_level">
                            <option value="">选择推荐</option>
                            <option value="9" >推荐9-幻灯</option>
                            <option value="1" >推荐1</option>
                            <option value="2" >推荐2</option>
                            <option value="3" >推荐3</option>
                            <option value="4" >推荐4</option>
                            <option value="5" >推荐5</option>
                            <option value="6" >推荐6</option>
                            <option value="7" >推荐7</option>
                            <option value="8" >推荐8</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_lock">锁定</label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <select name="val_lock">
                            <option value="">选择操作</option>
                            <option value="0" >解锁</option>
                            <option value="1" >锁定</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_status">状态</label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <select name="val_status">
                            <option value="">选择状态</option>
                            <option value="0" >未审核</option>
                            <option value="1" >已审核</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_hits">人气</label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="val_hits_min" required  placeholder="最小值" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="val_hits_max" required  placeholder="最大值" autocomplete="off" class="layui-input">
                    </div>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label"><input type="checkbox" lay-ignore value="1" name="ck_points">积分</label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="val_points_play" required  placeholder="播放积分" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="val_points_down" required  placeholder="下载积分" autocomplete="off" class="layui-input">
                    </div>
                </div>
            </div>


            <div class="layui-form-item">
                <button type="submit" class="layui-btn btn_submit">开始执行</button>
            </div>

        </div>
    </fieldset>
    </form>
</div>

<script type="text/javascript">
    layui.use(['form'], function () {

    });

    $('.btn_submit').click(function(){
        $('form').submit();
    })
</script>
</body>
</html>