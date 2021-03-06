<?php
$withOutProtection = true;
$index = true;
require_once('inc/req.php');
$req = true;
require_once("inc/header.php");
?>
    <!-- الكتب -->
    <div data-aos="fade-up"
    data-aos-duration="3000" class=" movies py-5 text-center">
      <div class="container">
        <h2 class="title mb-5">انواع الكتب</h2>

        <!-- filter -->
        <div class="row mt-4 mb-5">
          <div class="col-md-4 mb-2">
            <button class="btn btn-primary filter" data-class="a">الكل</button>
          </div>
          <div class="col-md-4 mb-2">
            <button class="btn btn-primary filter" data-class="m">الكتب</button>
          </div>
          <div class="col-md-4 mb-2">
            <button class="btn btn-primary filter" data-class="s">الصوتيات</button>
          </div>
        </div>

        <!-- الكتب -->
        <div class="movies-content animate__faster">
          <div class="row">

            <div  data-aos="fade-up"
               data-aos-duration="3000" class="part m col-md-3 mb-4">
              <div class="card border-0 bg-none text-left" style="width:100%">
                <div class=" position-relative">
                  <div class="movies-hover h-100 w-100 position-absolute d-flex align-items-center justify-content-center">
                    <a href="/soon.php" target="_blank"><i class="far fa-play-circle fa-3x"></i></a>
                  </div>
                  <img src="imgs/codingbook.jpg" class="img-fluid w-100" alt="Movie">
                </div>

                <div class="card-body px-0">
                  <h2>افضل الكتب</h2>
                  <h5 class="card-title mb-1">The pragmatic programmer </h5>
                </div>
              </div>
            </div>

            <div  data-aos="fade-up"
               data-aos-duration="3000" class="part m col-md-3 mb-4">
              <div class="card border-0 bg-none text-left" style="width:100%">
                <div class=" position-relative">
                  <div class="movies-hover h-100 w-100 position-absolute d-flex align-items-center justify-content-center">
                    <a href="/soon.php" target="_blank"><i class="far fa-play-circle fa-3x"></i></a>
                  </div>
                  <img src="imgs/coodingbook7.jpg" class="img-fluid w-100" alt="Movie">
                </div>

                <div class="card-body px-0">
                  <h2>افضل الكتب</h2>
                  <h5 class="card-title mb-1">Python programming </h5>
                </div>
              </div>
            </div>

            <div  data-aos="fade-up"
               data-aos-duration="3000" class="part m col-md-3 mb-4">
              <div class="card border-0 bg-none text-left" style="width:100%">
                <div class=" position-relative">
                  <div class="movies-hover h-100 w-100 position-absolute d-flex align-items-center justify-content-center">
                    <a href="/soon.php" target="_blank"><i class="far fa-play-circle fa-3x"></i></a>
                  </div>
                  <img src="imgs/codingbook5.jpg" class="img-fluid w-100" alt="Movie">
                </div>

                <div class="card-body px-0">
                  <h2>افضل الكتب</h2>
                  <h5 class="card-title mb-1">Computer programming</h5>
                </div>
              </div>
            </div>

            <div  data-aos="fade-up"
            data-aos-duration="3000" class="part m col-md-3 mb-4">
           <div class="card border-0 bg-none text-left" style="width:100%">
             <div class=" position-relative">
               <div class="movies-hover h-100 w-100 position-absolute d-flex align-items-center justify-content-center">
                 <a href="/soon.php" target="_blank"><i class="far fa-play-circle fa-3x"></i></a>
               </div>
               <img src="imgs/codingbook4.jpg" class="img-fluid w-100" alt="Movie">
             </div>

             <div class="card-body px-0">
               <h2>افضل الكتب</h2>
               <h5 class="card-title mb-1">structure and interpretation of computer programs</h5>
             </div>
           </div>
         </div>

          </div>
        </div>
      </div>
    </div>

    <!-- newsletter letter -->
    <section data-aos="fade-up"
    data-aos-duration="3000"  class="newsletter text-center py-5 text-white">
      <div class="container">
        <h2 class="title mb-5" >نشرة الأخبار</h2>
        <p>اشترك معنا لتصل اليك اخر الأخبار!</p>
        <form class="text-left d-inline-block">
          <div class="form-row">
            <div class="col-8">
              <input type="text" class="form-control" placeholder="example@gmail.com" required>
            </div>
            <div class="col-4">
              <button class="btn btn-primary">أشتراك</button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <!-- news section -->
    <div data-aos="fade-up"
    data-aos-duration="3000" class=" news py-5 text-center">
      <div class="container">
        <h2 class="title mb-5">اخر الاخبار</h2>

        <!-- news -->
        <div class="content">
          <div class="row mt-5">

            <div data-aos="fade-up"
            data-aos-duration="3000"class="col-md-3 mb-4">
              <div class="card border-0 bg-none text-left " style="width:100%;">
                <a href="https://www.amazon.com/dp/1680506609?tag=uuid10-20" target="_blank"><img src="imgs/news.jpg" class="card-img-top" alt="new"></a>
                <div class="card-body px-0">
                  <h5 class="card-title mb-1">PYTHON PROGRAMMING: 3 BOOKS IN 1: The Complete guide to Learn Everything you Need to Know about Python Paperback – April 20, 2020</h5>
                  <p class="card-text"> مصدر الخبر اضغط على الصورة</p>
                </div>
              </div>
            </div>

            <div data-aos="fade-up"
            data-aos-duration="3000"class="col-md-3 mb-4">
              <div class="card border-0 bg-none text-left " style="width:100%;">
                <a href="https://www.amazon.com/dp/B087CRNF1W?tag=uuid10-20" target="_blank"><img src="imgs/news2.jpg" class="card-img-top" alt="new"></a>
                <div class="card-body px-0">
                  <h5 class="card-title mb-1">C++20 Recipes: A Problem-Solution Approach 2nd ed. Edition</h5>
                  <p class="card-text"> مصدر الخبر اضغط على الصورة</p>
                </div>
              </div>
            </div>


            <div data-aos="fade-up"
            data-aos-duration="3000"class="col-md-3 mb-4">
              <div class="card border-0 bg-none text-left " style="width:100%;">
                <a href="https://www.amazon.com/dp/148425712X?tag=uuid10-20" target="_blank"><img src="imgs/news3.jpg" class="card-img-top" alt="new"></a>
                <div class="card-body px-0">
                  <h5 class="card-title mb-1">Beginning PyQt: A Hands-on Approach to GUI Programming 1st ed. Edition</h5>
                  <p class="card-text"> مصدر الخبر اضغط على الصورة</p>
                </div>
              </div>
            </div>

            <div data-aos="fade-up"
            data-aos-duration="3000"class="col-md-3 mb-4">
              <div class="card border-0 bg-none text-left " style="width:100%;">
                <a href="https://www.amazon.com/dp/1484258568?tag=uuid10-20" target="_blank"><img src="imgs/news4.jpg" class="card-img-top" alt="new"></a>
                <div class="card-body px-0">
                  <h5 class="card-title mb-1">Programming Machine Learning: From Coding to Deep Learning 1st Editions</h5>
                  <p class="card-text"> مصدر الخبر اضغط على الصورة</p>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <!-- motavite -->
    <div  data-aos="fade-up" class="container text-center">
      <h2 class="title mb-5 ">رأي المشتركين </h2>
      <div class="row mt-5 ">
        <div  data-aos="fade-up" class="backC col-md-4 mt-4 mb-4 ">
            <img src="imgs/mypics" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
            <h3> احمد الشمري</h3>
            <h5 class="text-muted">كويتي</h5>
          <p> موقع جميل انصح جميع القراء بإستخدامه </p>
        </div>
        <div data-aos="fade-up" class="backC col-md-4 mt-4 mb-4  ">
          <img src="imgs/mypics" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
          <h3> احمد الشمري</h3>
          <h5 class="text-muted">كويتي</h5>
        <p> موقع جميل انصح جميع القراء بإستخدامه </p>
      </div>
      <div  data-aos="fade-up" class="backC col-md-4 mt-4 mb-4 ">
        <img src="imgs/mypics" alt="pics" class="roundimg img-fluid rounded-circle mb-4">
        <h3> احمد الشمري</h3>
        <h5 class="text-muted">كويتي</h5>
      <p> موقع جميل انصح جميع القراء بإستخدامه </p>
    </div>
      </div>
    </div>
    <section>

    </section>
    <?php require_once 'inc/footer.php' ?>

  </body>
</html>
