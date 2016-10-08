<div class="articles container">
    <ul>
        [-foreach from=$articles item=item-]
            <li>
                <img width="140" height="90" src="[-base_url()-]media/img/articles/[-$item->articleLogo-]" />
                <div class="description">
                    <div class="name">
                        [-assign var='articleName' value=multyLang([-$item->articleNameUA-], [-$item->articleNameRU-], true)-]
                        <a href="[-base_lang_url()-]article/[-$item->articleID-]" title="[-$articleName-]">[-$articleName-]</a>
                        <div class="time">[-$item->articleTime|date_format:"%d.%m.%Y"-]</div>
                    </div>
                    <div class="shot-text">[-multyLang([-$item->articleTextUA-], [-$item->articleTextRU-], true)|truncate:300-]</div>
                    
                    <div class="clearfix"></div>
            </li>
        [-/foreach-]
    </ul>
</div>
