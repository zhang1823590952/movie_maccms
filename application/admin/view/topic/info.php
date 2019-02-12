{include file="../../../application/admin/view/public/head" /}
<script type="text/javascript" src="__STATIC__/js/jquery.jscolor.js"></script>
{include file="../../../application/admin/view/public/editor" flag="topic_editor"/}
<div class="page-container p10">

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>

    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="topic_id" value="{$info.topic_id}">

        <div class="layui-tab">
            <ul class="layui-tab-title ">
                <li class="layui-this">基本信息</a></li>
                <li>其他信息</li>
            </ul>
        <div class="layui-tab-content">

            <div class="layui-tab-item layui-show">

                <div class="layui-form-item">
                    <label class="layui-form-label">参数：</label>
                    <div class="layui-input-inline ">
                        <select name="topic_status">
                            <option value="1" >已审核</option>
                            <option value="0" {if condition="$info.topic_status eq '0'"}selected{/if}>未审核</option>
                        </select>
                    </div>
                    <div class="layui-input-inline ">
                        <select name="topic_level">
                            <option value="0">请选择推荐值</option>
                            <option value="9" {if condition="$info['topic_sort'] eq 9"}selected {/if}>推荐9-幻灯</option>
                            <option value="1" {if condition="$info['topic_sort'] eq 1"}selected {/if}>推荐1</option>
                            <option value="2" {if condition="$info['topic_sort'] eq 2"}selected {/if}>推荐2</option>
                            <option value="3" {if condition="$info['topic_sort'] eq 3"}selected {/if}>推荐3</option>
                            <option value="4" {if condition="$info['topic_sort'] eq 4"}selected {/if}>推荐4</option>
                            <option value="5" {if condition="$info['topic_sort'] eq 5"}selected {/if}>推荐5</option>
                            <option value="6" {if condition="$info['topic_sort'] eq 6"}selected {/if}>推荐6</option>
                            <option value="7" {if condition="$info['topic_sort'] eq 7"}selected {/if}>推荐7</option>
                            <option value="8" {if condition="$info['topic_sort'] eq 8"}selected {/if}>推荐8</option>

                        </select>
                    </div>
                    <div class="layui-input-inline w110">
                        <input type="checkbox" name="uptime" title="更新时间" value="1" checked class="layui-checkbox checkbox-ids" lay-skin="primary">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">名称：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" lay-verify="topic_name" value="{$info.topic_name}" placeholder="" name="topic_name">
                    </div>
                    <label class="layui-form-label">副标：</label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" value="{$info.topic_sub}" placeholder="" name="topic_sub">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">别名：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" lay-verify="topic_en" value="{$info.topic_en}" placeholder="" name="topic_en">
                    </div>
                    <label class="layui-form-label">首字母：</label>
                    <div class="layui-input-inline w70">
                        <input type="text" class="layui-input" value="{$info.topic_letter}" placeholder="" name="topic_letter">
                    </div>
                    <label class="layui-form-label">高亮：</label>
                    <div class="layui-input-inline w70">
                        <input type="text" class="layui-input color" value="{$info.topic_color}" placeholder="" name="topic_color">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">备注：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="{$info.topic_remarks}" placeholder="" name="topic_remarks">
                    </div>
                    <label class="layui-form-label">排序：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_sort}" placeholder="" name="topic_sort">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">扩展分类：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="{$info.topic_type}" placeholder="多个请用,号相连" name="topic_type">
                    </div>
                    <label class="layui-form-label">独立模板：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" lay-verify="topic_tpl" value="{$info.topic_tpl|mac_default='detail.html'}" placeholder="" name="topic_tpl">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">TAG收录：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="{$info.topic_tag}" placeholder="自动收录包含TAG的视频和文章；多个用,号相连" name="topic_tag">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">视频收录：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="{$info.topic_rel_vod}" placeholder="视频id多个请用,号相连" name="topic_rel_vod">
                    </div>
                    <div class="layui-input-inline">
                        <a class="layui-btn j-iframe" data-href="{:url('vod/data')}?select=1&input=topic_rel_vod" href="javascript:;" title="查询数据">查询数据</a>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">文章收录：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="{$info.topic_rel_art}" placeholder="文章id多个请用,号相连" name="topic_rel_art">
                    </div>
                    <div class="layui-input-inline">
                        <a class="layui-btn j-iframe" data-href="{:url('art/data')}?select=1&input=topic_rel_art" href="javascript:;" title="查询数据">查询数据</a>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">图片：</label>
                    <div class="layui-input-inline w500 upload">
                        <input type="text" class="layui-input upload-input" style="max-width:100%;" value="{$info.topic_pic}" placeholder="" id="topic_pic" name="topic_pic">
                    </div>
                    <div class="layui-input-inline ">
                        <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:1,thumb_class:'upload-thumb'}}" id="upload1">上传图片</button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">缩略图：</label>
                    <div class="layui-input-inline w500 upload">
                        <input type="text" class="layui-input upload-input upload-thumb" style="max-width:100%;" value="{$info.topic_pic_thumb}" placeholder="" id="topic_pic_thumb" name="topic_pic_thumb">
                    </div>
                    <div class="layui-input-inline ">
                        <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:''}}" id="upload2">上传图片</button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">幻灯图：</label>
                    <div class="layui-input-inline w500 upload">
                        <input type="text" class="layui-input upload-input" style="max-width:100%;" value="{$info.topic_pic_slide}" placeholder="" id="topic_pic_slide" name="topic_pic_slide">
                    </div>
                    <div class="layui-input-inline ">
                        <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:''}}" id="upload3">上传图片</button>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">简介：</label>
                    <div class="layui-input-block">
                        <textarea name="topic_blurb" cols="" rows="3" class="layui-textarea"  placeholder="不填写将自动从第一页详情里获取前100个字" style="height:40px;">{$info.topic_blurb}</textarea>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">介绍：</label>
                    <div class="layui-input-block">
                        <textarea id="topic_content" name="topic_content" type="text/plain" style="width:99%;height:300px">{$info.topic_content|mac_url_content_img}</textarea>
                    </div>
                </div>
            </div>

            <div class="layui-tab-item">

                <div class="layui-form-item">
                    <label class="layui-form-label">SEO关键字：</label>
                    <div class="layui-input-block w500">
                        <input type="text" class="layui-input" value="{$info.topic_key}" placeholder="" name="topic_key">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">SEO描述：</label>
                    <div class="layui-input-block w500">
                        <input type="text" class="layui-input" value="{$info.topic_des}" placeholder="" name="topic_des">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">SEO标题：</label>
                    <div class="layui-input-block w500">
                        <input type="text" class="layui-input" value="{$info.topic_title}" placeholder="" name="topic_title">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">顶数量：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_up}" placeholder="" id="topic_up" name="topic_up">
                    </div>
                    <label class="layui-form-label">踩数量：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_down}" placeholder="" id="topic_down" name="topic_down">
                    </div>
                    <button class="layui-btn" type="button" id="btn_rnd">随机生成</button>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">总人气：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_hits}" placeholder="" id="topic_hits" name="topic_hits">
                    </div>
                    <label class="layui-form-label">月人气：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_hits_month}" placeholder="" id="topic_hits_month" name="topic_hits_month" >
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">周人气：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_hits_week}" placeholder="" id="topic_hits_week" name="topic_hits_week">
                    </div>
                    <label class="layui-form-label">日人气：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input " value="{$info.topic_hits_day}" placeholder="" id="topic_hits_day" name="topic_hits_day">
                    </div>
                </div>


                <div class="layui-form-item">
                    <label class="layui-form-label">平均分：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_score}" placeholder="" id="topic_score" name="topic_score">
                    </div>
                    <label class="layui-form-label">总评分：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_score_all}" placeholder="" id="topic_score_all" name="topic_score_all">
                    </div>
                    <label class="layui-form-label">总评次：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="{$info.topic_score_num}" placeholder="" id="topic_score_num" name="topic_score_num">
                    </div>
                </div>
            </div>

        </div>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
{include file="../../../application/admin/view/public/foot" /}


<script type="text/javascript">

    layui.use(['form','upload', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
                , upload = layui.upload;;

        // 验证
        form.verify({
            topic_name: function (value) {
                if (value == "") {
                    return "请输入专题名称";
                }
            },
            topic_tpl: function (value) {
                if (value == "") {
                    return "请输入专题页模板";
                }
            }
        });

        upload.render({
            elem: '.layui-upload'
            ,url: "{:url('upload/upload')}?flag=topic"
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
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });

        $("#btn_rnd").click(function(){
            $("#topic_hits").val( rndNum(5000,9999) );
            $("#topic_hits_month").val( rndNum(1000,4999) );
            $("#topic_hits_week").val( rndNum(300,999) );
            $("#topic_hits_day").val( rndNum(1,299) );
            $("#topic_up").val( rndNum(1,999) );
            $("#topic_down").val( rndNum(1,999) );
            $("#topic_score").val( rndNum(10) );
            $("#topic_score_all").val( rndNum(1000) );
            $("#topic_score_num").val( rndNum(100) );
        });


        var ue = editor_getEditor('topic_content');

    });

</script>

</body>
</html>