<td>[-multyLang([-$item->articleNameUA-], [-$item->articleNameRU-])-]</td>

<td>
    <a class="link-edit" title="[-lang('edit')-]" onclick="doAction('updatearticle', [-$item->articleID-])">[-lang('edit')-]</a>
    <a class="link-delete" item-data="[-$item->articleID-]" title="[-lang('delete')-]" onclick="toConfirm('updatearticle/delete', this)">[-lang('delete')-]</a>
    <div class="separator"></div>
    
    [-if $item->articleStatus==1-]
        [-assign var='class' value='green'-]
        [-assign var='text' value='publish'-]
    [-else-]
        [-assign var='class' value='red'-]
        [-assign var='text' value='unPublish'-]
    [-/if-]
    <a class="link [-$class-]" item-data="[-$item->articleID-]" onclick="doAction('updatearticle/deactivate', [-$item->articleID-], true);">[-lang($text)-]</a>
</td>