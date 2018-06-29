$(document).ready( function () {
  $('#users_table').DataTable({
  });



  var editMode = false;
  $(".user-edit").click(function () {
    var row = $(this).parent().parent()
    if(!editMode) {
      editMode = true;
      $(this).val("Save");
      for (var i = 2; i < row.children().length - 2; i++) {
        var text = row.children(`td:nth-of-type(${i})`).html();
        row.children(`td:nth-of-type(${i})`).html(`<input type=text value="${text}" />`)
      }
    } else {
      $(this).val("Edit");
     

      for (var i = 2; i < row.children().length - 2; i++) {
        var value = row.children(`td:nth-of-type(${i})`).children().val();
        row.children(`td:nth-of-type(${i})`).html(`${value}`)
      }
      var id = row.children("td:nth-of-type(1)").html();
      var uname = row.children("td:nth-of-type(2)").html();
      var status = row.children("td:nth-of-type(3)").html();
      var isActive = row.children("td:nth-of-type(4)").html();
      var isBlacklisted = row.children("td:nth-of-type(5)").html();

      $.post("update-user.php", {id, uname, status, isActive, isBlacklisted}, function(data) {
        console.log(data);
      });
      editMode = false;
    }
  })
  
  $(".user-change-password").click(function () {
    var row = $(this).parent().parent()
    var newPass = prompt("Enter New Password");
    var id = row.children("td:nth-of-type(1)").html();
    var confirmed = confirm("Are you sure you want to change this users pass?");
    if(newPass && confirmed) {
      
      $.post("cpass.php", {newPass, id}, function(data) {
        console.log(data);
      });
    } else {
      console.log("No new pass")
    }
  })

  $(".user-delete-row").click(function () {
    var row = $(this).parent().parent()
    var id = row.children("td:nth-of-type(1)").html();

    if(confirm("Are you sure you want to delete this user?")) {
      $.post("delete-user.php", {id}, function(data) {
        console.log(data);
      });
      $(this).parent().parent().html("");
    }
    
  })
});
