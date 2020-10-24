<?php
if(count(get_included_files()) == 1){
	header('HTTP/1.0 403 Forbidden');
	exit;
}
require 'req.php';
if(isset($nologin)){

	if(isset($_SESSION['memberId:rpg'])){
	exit(header('Location: index.php'));
}else{}


}
if(isset($_SESSION['memberId:rpg'])){

$conn = Database::getInstance();
$sql = $conn->query("SELECT username,email,createdTime FROM Customers WHERE id='{$_SESSION['memberId:rpg']}'");

if($sql->rowCount() > 0){

	$row = $sql->fetch();
		$clientnickname = htmlspecialchars($row['username']);
		$clientemail = htmlspecialchars($row['email']);
		$clienttime = $row['createdTime'];
}
}

if(!isset($_SESSION['_token'])) {
$_SESSION['_token']=bin2hex(openssl_random_pseudo_bytes(16));
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=$Config["description"];?>">
    <meta name="token" content="<?php if(isset($_SESSION['_token'])) { echo $_SESSION['_token']; } ?>">
    <meta name="author" content="أحمد الشمري">
    <meta property="og:title" content="<?=$Config["title"];?>">
    <meta property="og:site_name" content="<?=$Config["title"];?>">
    <meta property="og:description" content="<?=$Config["description"];?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=$Config["icon"];?>">
    <link rel="apple-touch-icon-precomposed" href="<?=$Config["icon"];?>">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <script src='https://www.google.com/recaptcha/api.js?hl=ar'></script>


    <!-- other -->
    <link rel="icon" href="<?=$Config["icon"];?>">
    <title><?=$Config["title"];?></title>
  </head>
  <body>

    <!-- header -->
    <header>
      <!-- nav -->
      <nav class="navbar navbar-expand-lg navbar-dark py-4">
        <div class="container">
          <h1 class="navbar-brand"> <img class="img-fluid mr-2"  src="imgs/logo.png" width="32px" alt="Logo">كتابي</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#movNav" aria-controls="movNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="movNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link mx-2 w-100 " href="index.php">الصفحة الرئيسية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 w-100" href="howUS.php">من نحن؟</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 w-100" href="store.php">السوق </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 w-100" href="contact.php">التواصل</a>
              </li>
							<li class="nav-item">
              <?php if(!isset($_SESSION['memberId:rpg']) and !isset($nologin)){ ?>
								<div class="dropdown">
									<a href="" class="btn btn-danger btn-rounded text-white navLogin" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تسجيل دخول</a>
					        <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="dLabel">
							  <form class="px-4 py-3 clearfix" id="loginform" data-parsley-validate="" data-parsley-required-message="هذا الحقل مطلوب">

					            <div class="form-group">
					              <label for="emaillogin">البريد الإلكتروني</label>
					              <input type="email" class="form-control" name="emaillogin" id="emaillogin" data-parsley-trigger="keyup" data-parsley-type="email" data-parsley-type-message="يجب عليك كتابة إيميل صحيح " required>
					            </div>
					            <div class="form-group">
					              <label for="passwordlogin">كلمة المرور</label>
					              <input type="password" class="form-control" name="passlogin" id="passlogin" data-parsley-trigger="keyup" required>
					            </div>

						          <div class="form-group">
								        <div class="g-recaptcha" data-sitekey="<?=$Config["reCAPTCHA"];?>"></div>
					            </div>

					            <button type="submit" class="btn btn-primary float-right">تسجيل دخول</button>
					          </form>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="register.php">لا تملك حساب؟</a>
					        </div>
					      </div>

              <?php
              }else{
              	if(isset($clientnickname)){
              echo '<p class="text-white d-flex justify-content-right">'.$clientnickname.'</p>';
              	}
              }
              ?>
						</li>

            <?php if(isset($_SESSION['memberId:rpg'])){ ?>
            		<li class="nav-item">
                      <a href="logout.php" class="btn btn-danger btn-rounded text-white">تسجيل الخروج</a>
                    </li>
                  <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- slider -->
      <div id="slider" class="carousel slide" data-ride="carousel">
        <div class="container h-100">
          <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner text-center text-white  py-5 h-100">
            <div class="carousel-item h-100 active">
              <h1>اهلا بكم</h1>
              <p>حياكم الله في منصة كتابي</p>
            </div>
            <div class="carousel-item h-100">
              <h1>اقْرَأْ بِاسْمِ رَبِّكَ الَّذِي خَلَقَ</h1>
              <p>أستمتع!</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </header>
