<?php

function e($str) {
	return htmlentities($str);
}


function btn_edit($uri) {
    return anchor($uri, '<i class="glyphicon glyphicon-edit"></i>');
}

function btn_delete($uri) {
    return anchor($uri, '<i class="glyphicon glyphicon-remove"></i>', array('onclick' => "return confirm('Are You sure to delete')"));
}