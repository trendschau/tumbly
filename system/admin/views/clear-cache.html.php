<?php

$files = array();
$draft = array();
$files = glob('content/*/blog/*.md', GLOB_NOSORT);
$draft = glob('content/*/draft/*.md', GLOB_NOSORT);

if (!empty($files) || !empty($draft)) {
    migrate_old_content();
}

rebuilt_cache('all');

foreach (glob('cache/page/*.cache', GLOB_NOSORT) as $file) {
    unlink($file);
}

?>

<div class="creatorMenu">
	<h2>Done!</h2>
	<p>All cache has been deleted!</p>
</div>