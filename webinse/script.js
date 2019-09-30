$(document).ready(function(){
  get_users();
  $(".new-user-modal").hide();
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

function add_user() {
  var first = $("input[name=first]").val();
  var second = $("input[name=second]").val();
  var email = $("input[name=email]").val();

  $.ajax({
    type: "POST",
    url: "add_user.php",
    data: "first="+first+"&second="+second+"&email="+email,
    success: get_users()
  });

  get_users();
}
