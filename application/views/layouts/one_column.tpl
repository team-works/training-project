[-include file='layouts/header.tpl'-]

[-include file='layouts/page-header.tpl'-]

[-if !empty($heading)-]
    <header class="title-content-page">
        <h1>[-$heading-]</h1>
    </header>
[-/if-]

<div class="workspace">
    [-$workspace|default:"empty page"-]
</div>

[-include file='layouts/footer.tpl'-]
