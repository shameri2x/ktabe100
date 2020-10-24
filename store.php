<?php
require_once('inc/req.php');
require_once("inc/header.php");
$conn = Database::getInstance();
$allshares= $conn->query("SELECT user_id,message,date FROM store ");

?>

      <section>
          <!-- store -->
          <div data-aos="fade-up"
          data-aos-duration="3000" class="text-center">
            <div class="container py-5 my-3">
              <h1 class="title text-center mt-5 mb-4">السوق</h1>
              <p class="subtitle"> سوق لبيع وشراء وتبادل بين المشتركين </p>
              <div data-aos="fade-up"  data-aos-duration="3000" class="scrolling-wrapper flex-row flex-nowrap mt-4 pb-4">

                <div class="row">
                  <div class="col-md-4 mb-2">
                    <div class="w-100">
                      <img src="/imgs/codebook.jpg" class="img-fluid" alt="Img">
                    </div>
                  </div>

                  <div class="col-md-4 mb-2">
                    <div class="w-100">
                    <img src="/imgs/codebook2.jpg" class="img-fluid" alt="Img">
                    </div>
                  </div>

                  <div class="col-md-4 mb-2">
                    <div class=" w-100">
                       <img src="/imgs/codebook3.jpg" class="img-fluid" alt="Img">
                    </div>
                  </div>
                </div>
              </div>

              <div data-aos="fade-up"
              data-aos-duration="3000" class="container mt-5 mb-5">
                <div class="text-center">
                <h1 class="title text-center mt-4 mb-5">منصة مشاركة ونشر معلومات</h1>\
                <div class="row">

                <?php foreach($allshares as $row){
                  $userinfo = $conn->query('SELECT username FROM Customers WHERE id = '.$row['user_id'].'')->fetch();

                  $username = htmlspecialchars($userinfo['username']);
                  $msg = htmlspecialchars($row['message']);
                  $since = ago($row['date']);
                  ?>

                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-user"></i> <?=$username?></h5>
                        <p class="card-text"><?=$msg?></p>
                        <p class="text-muted">منذ <?=$since?> </p>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>

                <div class="text-center mt-5 d-flex justify-content-center py-5 my-3">
                  <div class="card" style="min-width: 20rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fal fa-share-alt"></i> تقديم مشاركة</h5>
                      <form class="shareContent" id="sharForm" data-parsley-validate="" data-parsley-required-message="هذا الحقل مطلوب">
                        <div class="form-group d-none">
                        <input type="text" class="form-control" name="formAhmed" id="formAhmed">
                        </div>

                      <textarea style="background-color:#d3d3d3 !important;" class="w-22 form-control" rows="4" name="message" placeholder="الرسالة" class="talk text-white" data-parsley-trigger="change" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="500" data-parsley-minlength-message="يجب عليك كتابة عشر احرف على الأقل" data-parsley-validation-threshold="10" required></textarea>

                      <button type="submit" class="btn btn-primary  filter mt-4 form-control">إرسال</button>

                    </form>
                    </div>
                  </div>

                </div>
              </div>
              </div>
          </section>

          <?php
           require_once 'inc/footer.php';
           ?>

  </body>
</html>
