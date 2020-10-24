<?php
$withOutProtection = true;
$index = true;
require_once('inc/req.php');
$req = true;
require_once("inc/header.php");
$conn = Database::getInstance();

$totalUsers = current($conn->query("SELECT count(*) FROM Customers")->fetch());

?>

      <!-- main -->

      <section>
        <!-- About us -->
        <div data-aos="fade-up" class=" container text-center pt-5">

            <h3 class="title text-center mt-4"> من نحن؟</h3>
            <p class="pt-3"> منصة اعلامية ننشرالثقافة للمجتمع<br>لننجز كويت جديدة تحت رعاية مؤسسة الكويت للتقدم العلمي و اكادمية كودد <br> نتمنى لكم التوفيق والسداد </p>
             <!-- numbers -->

             <div class="py-5 text-center">
              <div class="container">
                <h2 class="title mb-5">أرقامنا </h2>
                <div class="row mt-4 mb-5">
                  <div data-aos="fade-right"class="col-md-4 mb-2">
                    <h3 class="countupthis" numx="<?=$totalUsers?>">0</h3>
                    <p class="text-muted">عدد المشاركين</p>
                  </div>
                  <div data-aos="fade-up" class="col-md-4 mb-2">
                    <h3>552</h3>
                    <p class="text-muted">عدد المشاركين</p>
                  </div>
                  <div data-aos="fade-left" class="col-md-4 mb-2">
                    <h3>552</h3>
                    <p class="text-muted">عدد المشاركين</p>
                  </div>
                </div>

                <div data-aos="fade-down" class="text-center py-5">
                  <div class="container">
                  <h3 class="title">هدفنا</h3>
                  <p class="pt-3">
                    نشر المعرفة والثقافة اليكم <br> استمتع,,أنجز,,ثقافة
                  </p>
                  <div class="row mt-5">
                  <div data-aos="fade-right" class="col-md-4 mt-5">
                    <img src="./imgs/knowledge.png" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
                    <h3> علم </h3>
                    <h5  class="text-muted">انجز واربح</h5>
                  </div>
                  <div data-aos="fade-up" class="col-md-4 mt-5">
                    <img src="./imgs/knowledge.png" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
                    <h3> مهارة </h3>
                    <h5 class="text-muted">اكسب وتطور</h5>
                  </div>
                  <div data-aos="fade-left"class="col-md-4 mt-5">
                    <img src="./imgs/knowledge.png" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
                    <h3> المعرفة </h3>
                    <h5 class="text-muted">علم وثقافة</h5>
                  </div>
                  <div data-aos="fade-right" class="col-md-4 mt-5">
                    <img src="./imgs/knowledge.png" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
                    <h3> المعرفة </h3>
                    <h5 class="text-muted">علم وثقافة</h5>
                  </div>
                  <div data-aos="fade-up"class="col-md-4  mt-5">
                    <img src="./imgs/knowledge.png" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
                    <h3> المعرفة </h3>
                    <h5 class="text-muted">علم وثقافة</h5>
                  </div>
                  <div data-aos="fade-left" class="col-md-4  mt-5">
                    <img src="./imgs/knowledge.png" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
                    <h3> المعرفة </h3>
                    <h5 class="text-muted">علم وثقافة</h5>
                  </div>
                </div>
                </div>
                </div>



      </section>

      <?php require_once 'inc/footer.php'; ?>

  </body>
</html>
