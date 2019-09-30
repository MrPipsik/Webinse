$(document).ready(function(){
  get_users();
  $(".new-user-modal").hide();
  $(".error").hide();
  $("#show-modal").on("click", function(){
    $(".new-user-modal").toggle();
  });
});

function get_users(){
  $.ajax({
    type: "POST",
    url: "get_users.php",
    success: function(html){
      $("#content").html(html);
    }
  });
}

function remove (id) {
  $.ajax({
    type: "POST",
    url: "remove_user.php",
    data: "user_id="+id,
    success: get_users()
  });
  get_users();
}

function validation(input) {
  var value = $("input[name="+input+"]").val();
  if(value.length < 4 || value.length > 16) {
    $(".error-"+input).show();
    return false;
  }
  return true;
}

function add_user() {
  var first = $("input[name=first]").val();
  var second = $("input[name=second]").val();
  var email = $("input[name=email]").val();

  if(validation("first") && validation("second") && email !== ""){
    $.ajax({
      type: "POST",
      url: "add_user.php",
      data: "first="+first+"&second="+second+"&email="+email,
      success: get_users()
    });
  }

  get_users();
}
