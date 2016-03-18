<?php
	
	require_once 'config/config.php';
	require_once 'library/database.php';


	$action = (empty($_GET['action'])) ? '' : $_GET['action'];

	switch ($action) {
		case 'admin':
			
			include 'views/template_admin.php';

			break;

		case 'edit':
			
			include 'views/template_edit.php';

			break;
		
		default:
			
			include 'views/template_home.php';

			break;

		case 'login':
			
			$request_username = strip_tags(trim($_POST['username']));
    		$request_password = strip_tags(trim($_POST['password']));

			if ($request_username != '' && $request_password != ''){

				$result = $mysqli->query("SELECT * FROM users WHERE username = '".$request_username."' AND password = '".$request_password."'"); 
				$user_match_count = $result->num_rows;
 				
 				if ($user_match_count == 1){

					$user_row = $result->fetch_assoc();
					$_SESSION['userid'] = $user_row['id'];
	                $_SESSION['username'] = $user_row['username'];
	                $_SESSION['password'] = $user_row['password'];

	                // YOURE LOGGED IN
	              	header('location:index.php?action=edit');


 				}else{

 					// EMPTY FIELDS
 					header('location:index.php?action=default');
 				}

			}else{

				// WRONG USERNAME OF PASSWORD
				header('location:index.php?action=default');
			}

			break;

		case 'update':

			$h_text1 = strip_tags(trim($_POST['h_text1']));
			$h_text2 = strip_tags(trim($_POST['h_text2']));
			$h_btn1 = strip_tags(trim($_POST['h_btn1']));

			$who_text1 = strip_tags(trim($_POST['who_text1']));
			$who_text2 = strip_tags(trim($_POST['who_text2']));
			$who_text3 = strip_tags(trim($_POST['who_text3']));

			$what_text1 = strip_tags(trim($_POST['what_text1']));
			$what_text2 = strip_tags(trim($_POST['what_text2']));
			$what_text3 = strip_tags(trim($_POST['what_text3']));

			$review_text1 = strip_tags(trim($_POST['review_text1']));
			$review_text2 = strip_tags(trim($_POST['review_text2']));
			$review_say1 = strip_tags(trim($_POST['review_say1']));
			$review_say2 = strip_tags(trim($_POST['review_say2']));
			$review_say3 = strip_tags(trim($_POST['review_say3']));
			$review_say4 = strip_tags(trim($_POST['review_say4']));
			$review_prs1 = strip_tags(trim($_POST['review_prs1']));
			$review_prs2 = strip_tags(trim($_POST['review_prs2']));
			$review_prs3 = strip_tags(trim($_POST['review_prs3']));
			$review_prs4 = strip_tags(trim($_POST['review_prs4']));
			$review_plc1 = strip_tags(trim($_POST['review_plc1']));
			$review_plc2 = strip_tags(trim($_POST['review_plc2']));
			$review_plc3 = strip_tags(trim($_POST['review_plc3']));
			$review_plc4 = strip_tags(trim($_POST['review_plc4']));

			$tel = strip_tags(trim($_POST['tel']));
			$mail = strip_tags(trim($_POST['mail']));
			$desk = strip_tags(trim($_POST['desk']));

			$sql = "UPDATE content SET h_text1='$h_text1',h_text2='$h_text2',h_btn1='$h_btn1',who_text1='$who_text1',who_text2='$who_text2',who_text3='$who_text3',what_text1='$what_text1',what_text2='$what_text2',what_text3='$what_text3',review_text1='$review_text1',review_text2='$review_text2',review_say1='$review_say1',review_say2='$review_say2',review_say3='$review_say3',review_say4='$review_say4',review_prs1='$review_prs1',review_prs2='$review_prs2',review_prs3='$review_prs3',review_prs4='$review_prs4',review_plc1='$review_plc1',review_plc2='$review_plc2',review_plc3='$review_plc3',review_plc4='$review_plc4',tel='$tel',mail='$mail',desk='$desk'";
			$result = $mysqli->query($sql);

			header('location:index.php?action=default'); 


			break;
	}

	

?>