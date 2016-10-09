<div class="article-page container">
[-*    [-assign var='articleName' value=multyLang([-$item->articleNameUA-], [-$item->articleNameRU-], true)-]*-]
    [-assign var='articleText' value=multyLang([-$item->articleTextUA-], [-$item->articleTextRU-], true)-]
[-*    [-$articleName-]<br>*-]
[-*    [-$item->articleTime|date_format:"%d.%m.%Y"-]<br>*-]
    [-$articleText-]
</div>
