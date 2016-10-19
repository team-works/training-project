[-include file='layouts/header.tpl'-]

<div class="container" id="container">
    [-include file='layouts/page-header.tpl'-]

    <div class="left-column">
        [-include file='admin/admin-menu.tpl'-]
    </div>
    <div class="right-column content">
        [-if isset($breadcrumbs)-]
            <div class="bread-crumbs">[-$breadcrumbs-]</div>
            <div class="clearfix" ></div>
        [-/if-]
        <div>
            [-$workspace|default:lang('emptyPage')-]
        </div>
    </div>
</div>
<div class="clearfix" ></div>

<div class="footer container-fluid">
    [-include file='layouts/footer.tpl'-]
</div>
