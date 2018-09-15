<?php 

class Kategori extends Db_object {

	protected static $db_table = "categories";
	protected static $db_table_fields = array('id', 'title');
	public $id;
	public $title;



	// public static function find_category($cat_id) {

	// 	global $database;
	// 	$the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE cat_id = $id LIMIT 1");

	// 	return !empty($the_result_array) ? array_shift($the_result_array) : false;
	// }




}










 ?>