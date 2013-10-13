<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Vendla
 * Date: 13.10.13
 * Time: 13:40
 * To change this template use File | Settings | File Templates.
 */

class tags extends Controller{
	function index(){
		$this->tags=get_all("SELECT tag_name, COUNT(post_id) AS COUNT FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
		$this->tags=get_all("SELECT * FROM tag");
	}
	function view(){
		$tag_id = $this->params[0];
		$this->posts=get_all("SELECT * FROM post_tags NATURAL JOIN post WHERE tag_id='$tag_id'");
		$this->tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE tag_id='$tag_id'");
	}
}