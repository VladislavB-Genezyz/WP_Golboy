<?php
/* Except more*/ 
add_filter('excerpt_more', function($more) {
	return ' ...';
});