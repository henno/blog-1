<?php

class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post");
		// prepare tags array
		$_tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach ($_tags as $tag){
			$this->tags[$tag['post_id']][]=$tag['tag_name'];
		}
	}
	function view(){
		$post_id = $this->params[0];
		$this->post = get_one("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
		$this->tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
	}
}