<td>[-multyLang([-$item->contentNameUA-], [-$item->contentNameRU-])-]</td>
<td>
    [-lang('order')-]: [-$item->contentOrder-]
</td>
<td>
    <a class="link-edit" title="[-lang('edit')-]" onclick="doAction('updatecontent', [-$item->contentID-])"></a>
[-*    <a class="link-delete" item-data="[-$item->contentID-]" title="[-lang('delete')-]" onclick="toConfirm('updatecontent/delete', this)"></a>*-]
    <div class="separator"></div>
    
    [-if $item->contentStatus==1-]
        [-assign var='class' value='green'-]
        [-assign var='text' value='activate'-]
    [-else-]
        [-assign var='class' value='red'-]
        [-assign var='text' value='disable'-]
    [-/if-]
    <a class="link [-$class-]" item-data="[-$item->contentID-]" onclick="doAction('updatecontent/deactivate', [-$item->contentID-], true);">[-lang($text)-]</a>
    
</td>