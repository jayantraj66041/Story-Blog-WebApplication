<?php
	$connect = mysql_connect('localhost','root','');
	$db = mysql_select_db('story',$connect);

function insert_data($table,$array){
		$key = implode(",",array_keys($array));
		$value = implode("','",array_values($array));
		$query = mysql_query("insert into $table($key) value('$value')");
	}
function call_data($table){
    $array = [];
    $query = mysql_query("select * from $table order by p_id DESC");
    while($row = mysql_fetch_array($query)){
        $array[] = $row;
    }
    return $array;
}
function call_searchdata($table,$cond){
    $array = [];
    $query = mysql_query("select * from $table where $cond");
    while($row = mysql_fetch_array($query)){
        $array[] = $row;
    }
    return $array;
}
function redirect($page){
	echo "<script>window.open('$page.php','_self')</script>";
}
function delete_data($table,$cond){
	$query = mysql_query("delete from $table where $cond");
}
?>