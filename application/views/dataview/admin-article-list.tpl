<td>[-multyLang([-$item->articleNameUA-], [-$item->articleNameRU-])-]</td>

<td>
    <a class="link-edit" title="[-lang('edit')-]" onclick="doAction('updateaction', [-$item->actionID-])"></a>
    <a class="link-delete" item-data="[-$item->actionID-]" title="[-lang('delete')-]" onclick="toConfirm('updateaction/delete', this)"></a>
    <div class="separator"></div>
    
    [-if $item->articleStatus==1-]
        [-assign var='class' value='green'-]
        [-assign var='text' value='publish'-]
    [-else-]
        [-assign var='class' value='red'-]
        [-assign var='text' value='unPublish'-]
    [-/if-]
    <a class="link [-$class-]" item-data="[-$item->articleID-]" onclick="doAction('updateaction/deactivate', [-$item->articleID-], true);">[-lang($text)-]</a>
</td>