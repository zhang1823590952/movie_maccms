{include file="../../../application/admin/view/public/head" /}

<div class="page-container">

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>

    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">会员设置</li>

            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1.开启试看功能的话,播放窗口将采用iframe动态页面方式载入，可能影响性能哦; <br>
                    </blockquote>


                <div class="layui-form-item">
                    <label class="layui-form-label">会员模块：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="user[status]" value="0" title="关闭" {if condition="$config['user']['status'] neq 1"}checked {/if}>
                        <input type="radio" name="user[status]" value="1" title="开启" {if condition="$config['user']['status'] eq 1"}checked {/if}>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启会员模块</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_open]" value="0" title="关闭" {if condition="$config['user']['reg_open'] neq 1"}checked {/if}>
                        <input type="radio" name="user[reg_open]" value="1" title="开启" {if condition="$config['user']['reg_open'] eq 1"}checked {/if}>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册状态：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_status]" value="0" title="未审" {if condition="$config['user']['reg_status'] neq 1"}checked {/if}>
                        <input type="radio" name="user[reg_status]" value="1" title="已审" {if condition="$config['user']['reg_status'] eq 1"}checked {/if}>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">手机注册验证：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_phone_sms]" value="0" title="关闭" {if condition="$config['user']['reg_phone_sms'] neq 1"}checked {/if}>
                            <input type="radio" name="user[reg_phone_sms]" value="1" title="开启" {if condition="$config['user']['reg_phone_sms'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱注册验证：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_email_sms]" value="0" title="关闭" {if condition="$config['user']['reg_email_sms'] neq 1"}checked {/if}>
                            <input type="radio" name="user[reg_email_sms]" value="1" title="开启" {if condition="$config['user']['reg_email_sms'] eq 1"}checked {/if}>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">注册验证码：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_verify]" value="0" title="关闭" {if condition="$config['user']['reg_verify'] neq 1"}checked {/if}>
                            <input type="radio" name="user[reg_verify]" value="1" title="开启" {if condition="$config['user']['reg_verify'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">登录验证码：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[login_verify]" value="0" title="关闭" {if condition="$config['user']['login_verify'] neq 1"}checked {/if}>
                            <input type="radio" name="user[login_verify]" value="1" title="开启" {if condition="$config['user']['login_verify'] eq 1"}checked {/if}>
                        </div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">注册赠分：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_points]" placeholder="" value="{$config['user']['reg_points']}" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">用户注册成功后默认赠送积分</div>

                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">邀请注册积分：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[invite_reg_points]" placeholder="" value="{$config['user']['invite_reg_points']}" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">成功邀请用户赚取奖励积分</div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">推广访问积分：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[invite_visit_points]" placeholder="" value="{$config['user']['invite_visit_points']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">成功邀请访问赚取奖励积分</div>
                        <label class="layui-form-label">每IP限制：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[invite_visit_num]" placeholder="" value="{$config['user']['invite_visit_num']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">每个IP每日限制可以获取几次推广访问积分</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">三级分销状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reward_status]" value="0" title="关闭" {if condition="$config['user']['reward_status'] neq 1"}checked {/if}>
                            <input type="radio" name="user[reward_status]" value="1" title="开启" {if condition="$config['user']['reward_status'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">一级提成比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio]" placeholder="单位百分比" value="{$config['user']['reward_ratio']}" class="layui-input">
                        </div>
                        <label class="layui-form-label">二级提成比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio_2]" placeholder="单位百分比" value="{$config['user']['reward_ratio_2']}" class="layui-input">
                        </div>
                        <label class="layui-form-label">三级提成比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio_3]" placeholder="单位百分比" value="{$config['user']['reward_ratio_3']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">用户支付成功分销推广者都可获得一定比例的积分。提成不足1积分将忽略。</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">提现状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[cash_status]" value="0" title="关闭" {if condition="$config['user']['cash_status'] neq 1"}checked {/if}>
                            <input type="radio" name="user[cash_status]" value="1" title="开启" {if condition="$config['user']['cash_status'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">兑换比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[cash_ratio]" placeholder="兑换比例1元=多少积分" value="{$config['user']['cash_ratio']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">兑换比例1元=多少积分</div>
                        <label class="layui-form-label">最低提现金额：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[cash_min]" placeholder="例如100" value="{$config['user']['cash_min']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">最低提现多少金额。</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">试看时长：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[trysee]" placeholder="" value="{$config['user']['trysee']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">全局设置无权限需要积分点播的试看时长，单位分钟；0表示关闭全局试看；</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">视频收费方式：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[vod_points_type]" value="0" title="每集" {if condition="$config['user']['vod_points_type'] neq 1"}checked {/if}>
                            <input type="radio" name="user[vod_points_type]" value="1" title="每数据" {if condition="$config['user']['vod_points_type'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">文章收费方式：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[art_points_type]" value="0" title="每页" {if condition="$config['user']['art_points_type'] neq 1"}checked {/if}>
                            <input type="radio" name="user[art_points_type]" value="1" title="每数据" {if condition="$config['user']['art_points_type'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">头像上传：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[portrait_status]" value="0" title="关闭" {if condition="$config['user']['portrait_status'] neq 1"}checked {/if}>
                            <input type="radio" name="user[portrait_status]" value="1" title="开启" {if condition="$config['user']['portrait_status'] eq 1"}checked {/if}>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">头像尺寸：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[portrait_size]" placeholder="" value="{$config['user']['portrait_size']}" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">尺寸建议100x100</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名过滤：</label>
                        <div class="layui-input-block">
                            <textarea name="user[filter_words]" class="layui-textarea" placeholder="多个用,号分隔">{$config['user']['filter_words']}</textarea>
                        </div>
                    </div>
            </div>


                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                        <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

{include file="../../../application/admin/view/public/foot" /}
<script type="text/javascript">
    layui.use(['form', 'layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer;


    });



</script>

</body>
</html>