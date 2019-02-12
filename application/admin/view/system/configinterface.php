{include file="../../../application/admin/view/public/head" /}

<div class="page-container">
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">站外入库设置</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1.转换分类每个各占一行;<br>
                        2.本地分类在前,采集分类在后(动作片=动作);<br>
                        3.不要有多余的空行;<br>
                        4.视频播放器、备注、地址、服务器组、文章分页等多页数据连接符都是$$$<br>
                        4.视频入库接口地址/api.php/receive/vod；文章入库接口地址/api.php/receive/art；<br>
                        5.明星入库接口地址/api.php/receive/actor；角色入库接口地址/api.php/receive/role；<br>

                    </blockquote>

                <div class="layui-form-item">
                    <label class="layui-form-label">接口开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="interface[status]" value="0" title="关闭" {if condition="$config['interface']['status'] neq 1"}checked {/if}>
                        <input type="radio" name="interface[status]" value="1" title="开启" {if condition="$config['interface']['status'] eq 1"}checked {/if}>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">入库免登录密码：</label>
                    <div class="layui-input-block">
                        <input type="text" name="interface[pass]" placeholder="数据每页显示量，不建议超过50" value="{$config['interface']['pass']}" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">视频分类转换：</label>
                    <div class="layui-input-inline" style="width:400px;!important;">
                        <textarea name="interface[vodtype]" class="layui-textarea" rows="20" >{$config['interface']['vodtype']|mac_replace_text}</textarea>
                    </div>
                    <label class="layui-form-label">文章分类转换：</label>
                    <div class="layui-input-inline" style="width:400px;!important;">
                        <textarea name="interface[arttype]" class="layui-textarea" rows="20" >{$config['interface']['arttype']|mac_replace_text}</textarea>
                    </div>
                </div>

                <div class="layui-form-item">

                </div>
            </div>
            </div>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>
</div>

{include file="../../../application/admin/view/public/foot" /}
<script type="text/javascript">

</script>

</body>
</html>