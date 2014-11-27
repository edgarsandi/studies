<?php
$contents = @file('error.log', FILE_SKIP_EMPTY_LINES);
if (is_array($contents)) {
    echo end($contents);
}
unset($contents);