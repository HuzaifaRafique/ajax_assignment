<?php
require_once('connect.php');

if(isset($_POST['action'])){
	if(isset($_POST['username']) && !empty(trim($_POST['username']))){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$age = $_POST['age'];
	} else {
		die("hi");
	}
	$results = mysqli_query($connect, "INSERT INTO data ( username, email,age) VALUES ( '$name', '$email','$age')");
		if($results){
			$last_id = mysqli_insert_id($connect);
			echo "Last id is " . $last_id;
		} else{
			echo mysqli_error($connect);
		}
		}



//if (is_ajax()) {
if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
	$action = $_POST["action"];
	switch($action) { //Switch case for value of action
		case "test": test_function(); break;
	}
}
//}

//Function to check if the request is an AJAX request
function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
	//$return = $_POST;
	//Do what you need to do with the info. The following are some examples.
	//if ($return["favorite_beverage"] == ""){
	// $return["favorite_beverage"] = "Coke";
	//}
	//$return["favorite_restaurant"] = "McDonald's";
	//$return["json"] = json_encode($return);

	echo json_encode($_POST);
}
}
