<div class="category">
    <h1>Категорії товарів</h1>
    [-foreach from=$categories item=$item-]
            <div class="categoty-item">
                <div class="name">
                    <a href="#">[-$item->catalogNameUA-]</a>
                </div>
                <div class="img">
                    <a href="#" >
                        <img src="[-base_url()-]media/img/catalog/[-$item->catalogLogo-]" width="304" height="260" alt="[-$item->catalogNameUA-]" />
                    </a>
                </div>
            </div>
    [-/foreach-]
</div>
