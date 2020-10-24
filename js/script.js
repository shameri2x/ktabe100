var animation = false;
var animationType = "a";

$( document ).ready(function() {
  $("#slider").css("height", $('header').innerHeight() - $('nav').innerHeight())

  $('.filter').on('click', function() {
    const data = $(this).data('class');
    if (animationType == data || animation) return;
    animationType = data;
    animation = true;

    animateCSS('.movies-content', "fadeOut").then((message) => {
      if (data == "a") {
        $(".part").removeClass('d-none');
        animateCSS('.movies-content', "fadeIn");
        animation = false;
        return;
      }
      $(".part").addClass('d-none');
      $("."+data).removeClass("d-none");
      animateCSS('.movies-content', "fadeIn");
      animation = false;
    });
  });

});

const animateCSS = (element, animation, prefix = 'animate__') =>
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);
    node.classList.add(`${prefix}animated`, animationName);
    function handleAnimationEnd() {
      node.classList.remove(`${prefix}animated`, animationName);
      node.removeEventListener('animationend', handleAnimationEnd);
      resolve('Animation ended');
    }
    node.addEventListener('animationend', handleAnimationEnd);
});

function init2() {

AOS.init();

$(document).ready(function() {
  var options = {  
    useEasing: true,
      useGrouping: true,
      separator: ',',
      decimal: '.',
      prefix: '',
      suffix: ''
  };
  $('.countupthis').each(function() {
    var num = $(this).attr('numx'); //end count
    var nuen = $(this).text();
    if (nuen === "") {
      nuen = 0;
    }
    var counts = new CountUp(this, nuen, num, 0, 8, options);
    counts.start();
  });


});
$('#sharForm').parsley();
$("#sharForm").submit(function(e) {
  e.preventDefault();
  var form = $(this);

  if($('#sharForm').parsley().isValid())
  {

    sendData("store.php", form.serialize())
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
          $('#sharForm')[0].reset();
          $('#sharForm').parsley().reset();
          animateCSS('.contactus', "fadeOut").then((message) => {

            $(".shareContent").addClass("d-none");

          });
          animateCSS('.shareContent', "fadeIn").then((message) => {
            $(".shareContent").html(response.m);

            $(".shareContent").removeClass("d-none");

          });


        }

      });
  }
});

}


var xmlhttp;
var token=document.getElementsByTagName('meta')["token"].content;
var ajax_location = 'ajax/';

function handleResponse(response) {
  response.then(function(response) {
    if(typeof response.updatetoken != 'undefined') {
      document.getElementsByTagName('meta')["token"].content = response.updatetoken;
    }
  });
  return response;
}

function sendData(url = ``, data = '', method = 'POST',token = true) {
  if(token){
    data = data+'&token='+document.getElementsByName('token')[0].getAttribute('content');
  }
    if(method == 'POST'){
    return fetch(ajax_location + url, {
        method: method, // *GET, POST, PUT, DELETE, etc.
        mode: "cors", // no-cors, cors, *same-origin
        cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
        credentials: "same-origin", // include, same-origin, *omit
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        redirect: "follow", // manual, *follow, error
        body: data // body data type must match "Content-Type" header
    })
    .then(response => handleResponse(response.json())); // parses response to JSON
    } else if(method == 'GET'){

        return fetch(ajax_location + url + '?' + data).then(response => handleResponse(response.json()));
    }
}

if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

const toast = swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000
});


