{include file="../../../application/admin/view/public/head" /}
<div class="page-container p10">
    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>

    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="user_id" name="user_id" type="hidden" value="{$info.user_id}">
        <div class="layui-form-item">
            <label class="layui-form-label">账号：</label>
            <div class="layui-input-block  ">
                <input type="text" class="layui-input" value="{$info.user_name}" placeholder="" id="user_name" name="user_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码：</label>
            <div class="layui-input-block">
                <input type="password" class="layui-input" value="{$info.user_pwd}" placeholder="" id="user_pwd" name="user_pwd">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">状态：</label>
            <div class="layui-input-block">
                    <input name="user_status" type="radio" id="rad-1" value="0" title="禁用" {if condition="$info['user_status'] neq 1"}checked {/if}>
                    <input name="user_status" type="radio" id="rad-2" value="1" title="启用" {if condition="$info['user_status'] eq 1"}checked {/if}>
            </div>
        </div>


        <div class="layui-form-item ">
            <label class="layui-form-label">会员组：</label>
            <div class="layui-input-inline">
                <select name="group_id" lay-filter="group_id">
                    {volist name="group_list" id="vo"}
                    <option value="{$vo.group_id}" {if condition="$info['group_id'] eq $vo['group_id']"}selected {/if}>{$vo.group_name}</option>
                    {/volist}
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">头像：</label>
            <div class="layui-input-inline w500 upload">
                <input type="text" class="layui-input upload-input" style="max-width:100%;" value="{$info.user_portrait}" placeholder="" id="user_portrait" name="user_portrait">
            </div>
            <div class="layui-input-inline ">
                <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:''}}" id="upload1">上传图片</button>
            </div>
        </div>

        <div class="layui-form-item rowTime" {if condition="$info.group_id elt 2"} style="display:none;" {/if}>
            <label class="layui-form-label">包时起始：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" name="user_start_time" id="user_start_time" value="{$info.user_start_time|date='Y-m-d H:i:s',###}" placeholder="yyyy-MM-dd HH:mm:ss">
            </div>
            <label class="layui-form-label">包时截止：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" name="user_end_time" id="user_end_time" value="{$info.user_end_time|date='Y-m-d H:i:s',###}" placeholder="yyyy-MM-dd HH:mm:ss">
            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">积分：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="{$info.user_points}" placeholder="" id="user_points" name="user_points">
            </div>
            <label class="layui-form-label">电话：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="{$info.user_phone}" placeholder="" id="user_phone" name="user_phone">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">QQ：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="{$info.user_qq}" placeholder="" id="user_qq" name="user_qq">
            </div>
            <label class="layui-form-label">email：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="{$info.user_email}" placeholder="" id="user_email" name="user_email">
            </div>
        </div>
        <div class="layui-form-item">

        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">找回问题：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="{$info.user_question}" placeholder="" id="user_question" name="user_question">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">找回答案：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="{$info.user_answer}" placeholder="" id="user_answer" name="user_answer">
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
{include file="../../../application/admin/view/public/foot" /}

<script type="text/javascript">
    layui.use(['form', 'layer', 'upload',  'laydate'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
             ,laydate = layui.laydate
            ,upload = layui.upload;


        // 验证
        form.verify({
            user_name: function (value) {
                if (value == "") {
                    return "请输入账号";
                }
            },
            user_pwd: function (value) {
                if (value == "") {
                    return "请输入密码";
                }
            }
        });

        //日期范围
        laydate.render({
            elem: '#user_end_time',
            type: 'datetime'
        });
        laydate.render({
            elem: '#user_start_time',
            type: 'datetime'
        });

        form.on('select(group_id)', function(data) {
            $('.rowTime').hide();
            if(data.value >2 ){
                $('.rowTime').show();
            }
        });



        upload.render({
            elem: '.layui-upload'
            ,url: "{:url('upload/upload')}?flag=user&user_id={$info.user_id}"
            ,method: 'post'
            ,before: function(input) {
                layer.msg('文件上传中...', {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

                if(res.data.thumb_class !=''){
                    $('.'+ res.data.thumb_class).val(res.data.thumb[0].file);
                }
            }
        });

        $('.upload-input').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc;	} else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc + '?r=' + Math.random() );
        },function (e){
            $(".showpic").css("display","none");
        });


    });




</script>

</body>
</html>