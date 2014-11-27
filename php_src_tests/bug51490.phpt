--TEST--
Bug #51490	html_entity_encode() doesn't work with windows-1251
--FILE--
<?php
    echo html_entity_decode( "&#xC7;&#xE0;&#xFF;&#xE2;&#xEA;&#xE0;", ENT_QUOTES, 'cp1251');
?>
--EXPECT--
&#xC7;&#xE0;&#xFF;&#xE2;&#xEA;&#xE0;
