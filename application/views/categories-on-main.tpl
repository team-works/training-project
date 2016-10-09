<div class="category">
    <div class="container">
        <div class="page-title">
            <fieldset>
                <legend align="center" class="bg-grey">[-lang('proposition')-]</legend>
            </fieldset>
        </div>
        [-foreach from=$categories item=$item-]
            [-assign var='catalogName' value=multyLang([-$item->catalogNameUA-], [-$item->catalogNameRU-])-]
        
            <div class="category-item">
                <div class="name">
                    <a href="#" >[-$catalogName-]</a>
                </div>
                <div class="img">
                    <a href="#" >
                        <img src="[-base_url()-]media/img/catalog/[-$item->catalogLogo-]" width="304" height="260" alt="[-$catalogName-]" />
                    </a>
                </div>
            </div>
        [-/foreach-]
    </div>
</div>
<div class="clearfix" ></div>
