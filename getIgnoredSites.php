<?php
include_once 'SiteScanner.class.php';
include_once 'config.php';

if($basePath !== null) {
	if(count($ignoredSites) > 0) {
		foreach ($ignoredSites as $site):
			?><li><a class="icon-remove" href = "delExcludeUrls.php?url=<?=urlencode($site)?>"></a> - <?=$site?></li>
		<?php
		endforeach;
	}
	else {
		?><li> None </li>
		<?php
	}
}
?>