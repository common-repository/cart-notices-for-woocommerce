<?php
$framework_version_current = '3.0.1';
if( version_compare($framework_version_current, $framework_version, '>') ) {
    $framework_version = $framework_version_current;
    $framework_dir = __DIR__;
}