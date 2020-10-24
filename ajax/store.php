<?php
require_once("../inc/req.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
		$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}

  if(!isset($_SESSION['_token']) OR !isset($_POST['token']) OR $_POST['token'] !== $_SESSION['_token']){
		returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف من فضلك أعد تحميل هذه الصفحة','b' => true));
	} else if(isset($_POST['message'],$_POST['token'],$_POST['formAhmed']) and empty($_POST['formAhmed'])){
		if(antiSpam("Smsg:Smsg.php","60")){
			returnJSON(array('t'=>'خطأ','m'=>'من فضلك انتظر قليلا ثم حاول مجدداً', 's'=>'error', 'b'=>'موافق'));
		}

	if(empty($_POST['message'])){
        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'تاكد من المدخلات','b' => true));

	}elseif(strlen($_POST['message']) < 10 || strlen($_POST['message']) > 500){
        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'يجب ان تكون الرسالة 10 احرف على الاقل ','b' => true));


	}else{

        $conn=Database::getInstance();

	$stmtz=$conn->prepare("INSERT INTO store (message,user_id,date,IP) VALUES (:message, :user_id,".time().", :ip)");
    $stmtz->bindValue(":message", $_POST['message']);
    $stmtz->bindValue(":user_id", $_SESSION['memberId:rpg']);
    $stmtz->bindValue(":ip", $_SERVER['REMOTE_ADDR']);

		$stmtz->execute();

		if($stmtz->rowCount() > 0){

      $msg = htmlspecialchars($_POST['message']);


   returnJSON(array('tp' => 'success', 't' => 'حسناً', 'm' => 'تم إرسال مشاركتك بنجاح , شكراً لك ','b' => true,'msg' => $msg));


			}
		}
	}
}
?>
