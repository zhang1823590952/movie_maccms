{if condition="$__PAGING__.record_total gt 0"}
<div class="mac_pages">
    <div class="page_tip">共{$__PAGING__.record_total}条数据,当前{$__PAGING__.page_current}/{$__PAGING__.page_total}页</div>
    <div class="page_info">
        <a class="page_link" href="{$__PAGING__.page_url|mac_url_page=1}" title="首页">首页</a>
        <a class="page_link" href="{$__PAGING__.page_url|mac_url_page=$__PAGING__.page_prev}" title="上一页">上一页</a>
        {maccms:foreach name="$__PAGING__.page_num" id="num"}
        {if condition="$__PAGING__['page_current'] eq $num"}
        <a class="page_link page_current" href="javascript:;" title="第{$num}页">{$num}</a>
        {else}
        <a class="page_link" href="{$__PAGING__.page_url|mac_url_page=$num}" title="第{$num}页" >{$num}</a>
        {/if}
        {/maccms:foreach}
        <a class="page_link" href="{$__PAGING__.page_url|mac_url_page=$__PAGING__.page_next}" title="下一页">下一页</a>
        <a class="page_link" href="{$__PAGING__.page_url|mac_url_page=$__PAGING__.page_total}" title="尾页">尾页</a>

        <input class="page_input" type="text" placeholder="页码"  id="page" autocomplete="off" style="width:40px">
        <button class="page_btn mac_page_go" type="button" data-url="{$__PAGING__.page_url}" data-total="{$__PAGING__.page_total}" data-sp="{$__PAGING__.page_sp}" >GO</button>
    </div>
</div>
{else/}
<div class="wrap">
    <h1>没有找到匹配数据</h1>
</div>
{/if}

<style>
	.mac_pages{    line-height: 30px;
    height: auto;
    text-align: center;
    text-overflow: ellipsis;
    display: block;}
	.mac_pages .page_tip{}
	.mac_pages .page_info{}
	.mac_pages .page_info .page_link{    color: #1db69a;
    padding: 1px 9px 1px 9px;
    border: 1px solid #1db69a;
    border-radius: 2px;
    white-space: nowrap;}
	.mac_pages .page_info .page_current{font-style: normal;
    background-color: #1db69a;
    color: #fff;
    padding: 2px 5px 2px 5px;
    border-radius: 2px;
    white-space: nowrap;}
	.mac_pages .page_info .page_input{}
	.mac_pages .page_info .page_btn{    font-style: normal;
    background-color: #1db69a;
    color: #fff;
    padding: 2px 5px 2px 5px;
    border-radius: 2px;
    white-space: nowrap;}

</style>