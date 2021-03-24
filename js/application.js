$(document).ready(function() {

  $('#form').submit(function(e) {
    e.preventDefault();
    var name = $('#name').val();
    var address = $('#address').val();
    var experience = document.getElementById("experience").value;
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var telephone = $('#telephone').val();
    // var password = $('#password').val();

    $(".error").remove();
    console.log(experience);

    if (name.length == 0) {
      $('#name').after('<div class="required-alert alert alert-danger"><span class="error"> This field is required</span></div>');
    }
    if (address.length == 0) {
      $('#address').after('<div class="required-alert alert alert-danger"><span class="error"> This field is required</span></div>');
    }
    if (experience == 0 || experience == null || experience == undefined || experience == ''){
      $('#experience').after('<div class="required-alert alert alert-danger"><span class="error"> Enter a valid Experience</span></div>');
    } 
    if (experience > 50){
      $('#experience').after('<div class="required-alert alert alert-danger"><span class="error"> Enter a valid Experience</span></div>');
    }

    if (mobile.length == 0){
      {
        $('#mobile').after('<div class="required-alert alert alert-danger"><span class="error"> Enter a valid Mobile Number</span></div>');
      }
    } else {
      var regEx = /[0-9]{10,10}/;
      var validMobile = regEx.test(mobile);
      if (!validMobile) {
        $('#mobile').after('<div class="required-alert alert alert-danger"><span class="error"> This field is required</span></div>');
      }
    }

    if (telephone.length){
      var regEx = /[0-9]{10,10}/;
      var validMobile = regEx.test(mobile);
      if (!validMobile) {
        $('#telephone').after('<div class="required-alert alert alert-danger"><span class="error"> Enter a valid Telephone Number</span></div>');
      }
    }


    if (email.length < 1) {
      $('#email').after('<div class="required-alert alert alert-danger"><span class="error"> This field is required</span></div>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<div class="required-alert alert alert-danger"><span class="error"> Enter a valid Email</span></div>');
      }
    }
    // if (password.length < 8) {
    //   $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
    // }
  });

});