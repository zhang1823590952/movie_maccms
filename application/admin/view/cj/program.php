{include file="../../../application/admin/view/public/head" /}
<div class="page-container p10">
    <form class="layui-form layui-form-pane" action="">
        <input type="hidden" name="id" value="{$param.id}">
        <fieldset class="layui-elem-field">
            <legend>标签与数据库对应关系</legend>
        </fieldset>

                    <table class="layui-table" lay-size="sm" style="width:600px;">
                        <thead>
                        <tr>
                            <th width="100">数据库字段</th>
                            <th width="100">标签字段</th>
                            <th width="100">处理函数</th>
                        </tr>
                        </thead>

                        {volist name="column_list" id="vo"}
                        <tr>
                            <td><input type="hidden" name="model_field[]" value="{$vo.Field}">{$vo.Field}</td>
                            <td><select name="node_field[]">
                                <option value="">请选择</option>
                                {volist name="node_field" id="vo2" key="key2"}
                                <option value="{$key}" {if condition="$program_config['map'][$vo.Field] eq $key"}selected{/if}>{$vo2}</option>
                                {/volist}
                            </select>
                            </td>
                            <td><select name="funcs[]"><option value="" >请选择</option><option value="trim" {if condition="$program_config['funcs'][$vo.Field] eq 'trim'"}selected{/if}>去空格</option></select></td>
                        </tr>
                        {/volist}
                        </tbody>
                    </table>

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

</script>

</body>
</html>