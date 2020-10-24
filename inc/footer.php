<!-- footer -->
<footer class="text-center text-white bg-dark py-5">
 <div class="container">
  <a href="./index.html"> <img src="imgs/logo.png" width="92px" alt="Logo"></a>
   <section class="mt-4">
     <!-- instagram -->
     <a href="https://instagram.com/a7mdorma" target="_blank" class="mx-2">
       <i class="fab fa-instagram fa-2x"></i>
     </a>
     <!-- twitter -->
     <a href="https://twitter.com/shameri2x" target="_blank" class="mx-2">
       <i class="fab fa-twitter fa-2x"></i>
     </a>
     <!-- youtube -->
     <a href="https://www.youtube.com/channel/UCQYAGrCZtb2l0RMV1FHmbqA/featured" target="_blank" class="mx-2">
       <i class="fab fa-youtube fa-2x"></i>
     </a>
   </section>
   <section class="container d-flex justify-content-center msg mt-5">
     <div class="box mb-4 p-2 d-flex flex-column  align-items-center mt-5">

      <h5 style="display: flex; align-items: center; justify-content: center;" >  <span id="magic"></span> <br></h5>
      <form class="contactus" id="contactForm" data-parsley-validate="" data-parsley-required-message="هذا الحقل مطلوب">
        <div class="form-group d-none">
        <input type="text" class="form-control" name="formAhmed" id="formAhmed">
        </div>

       <input type="text" name="name" class="form-control" placeholder="الإسم" data-parsley-trigger="keyup" data-parsley-minlength="4" data-parsley-minlength-message="يجب عليك كتابة ستة أحرف على الأقل" required>
       <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" data-parsley-trigger="keyup" data-parsley-type="email" data-parsley-type-message="يجب عليك كتابة إيميل صحيح " required>
       <textarea  name= "msg" class="form-control" placeholder="رسالتك" rows="4" required></textarea>
       <button type="submit" class="btn btn-primary filter mt-4 form-control">إرسال</button>
     </form>
     </div>
   </section>

   <hr class="border-white my-4">
  كتابي | حقوق النشر والطبع محفوظة &copy;2020
   <br><br>
   Developed with <span style="color: red;"><i class="fas fa-heart"></i></span> By Ahmed AlShammari 4 <a href="http://app.code.kw/" target="_blank">code.kw</a>
 </div>
</footer>

 <!-- JavaScript -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.2/countUp.min.js'></script>
 <script src="js/parsley.js"></script>
 <script src="js/tw.js"></script>
 <script src="js/script.js"></script>
 <script>

      $('#contactForm').parsley();
      $("#contactForm").submit(function(e) {
        e.preventDefault();
        var form = $(this);

        if($('#contactForm').parsley().isValid())
        {

          sendData("contact.php", form.serialize())
            .then(function(response)
            {
              Swal.fire(
                {
                  title: response.t,
                  text: response.m,
                  type: response.tp,
                  showConfirmButton: response.b,
                  confirmButtonText: 'حسناً'
                });

               if(response.tp == 'success')
              {
                $('#contactForm')[0].reset();
                $('#contactForm').parsley().reset();
                animateCSS('.contactus', "fadeOut").then((message) => {

                  $(".contactus").addClass("d-none");

                });
                animateCSS('.contactus', "fadeIn").then((message) => {
                  $(".contactus").html(response.m);

                  $(".contactus").removeClass("d-none");

                });


              }

            });
        }
      });








 new TypeIt('#magic', {
  strings: 'تواصل معنا',
  speed: 300,
  loop: false,
  loopDelay: 2500,
  waitUntilVisible: true
}).go();




 $('#loginform').parsley();
 $("#loginform").submit(function(e) {
   e.preventDefault();
   var form = $(this);

   if($('#loginform').parsley().isValid())
   {
 if (grecaptcha === undefined) {
   new toast({
    type: 'info',
    title: 'من فضلك تحقق من أنك لست روبوت'
  });
  throw new Error("Empty RECAPTCHA");
}

var response = grecaptcha.getResponse();
if (!response) {
   new toast({
    type: 'info',
    title: 'من فضلك تحقق من أنك لست روبوت'
  });
  throw new Error("Robot Check");
}

     sendData("login.php", form.serialize())
       .then(function(response)
       {
   new toast({
    type: response.tp,
    title: response.m
  });

         if(response.tp == 'error')
         {
    grecaptcha.reset();

         }
         else if(response.tp == 'success')
         {
           animateCSS('.dropdown', "fadeOut").then((message) => {
             $(".dropdown").addClass("d-none");

           });
           animateCSS('.dropdown', "fadeIn").then((message) => {
             $(".dropdown").html('<p class="text-white">'+response.name+'</p>');
           $(".dropdown").removeClass("d-none");

           });



     }else{
    grecaptcha.reset();
   }
       });
   }
 });


 <?php if(isset($_GET['status']) && $_GET['status'] == 1) { ?>
   new toast({
     type: 'info',
     title: 'فضلاً قم بتسجيل الدخول'
   });
<?php } ?>
</script>
