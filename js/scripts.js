function removeMovie(id) {
    console.log(event.target);
    var delete_id = id;

    $.ajax({
        type: 'POST',
        url: 'sql/delete.php',
        data: {id: delete_id},
        success: function() {
            console.log(this.data);
        }, 
        error: function(xhr, textStatus, thrownError, data) {
        alert("Error: " + thrownError);}
    });
    location.reload();
};

function add() {
    var string = event.target.value;
    console.log(string);

    $('#'+string).collapse('toggle');
    setTimeout(function(){    $('#'+string).collapse('toggle');}, 2000);

    $.ajax({
        type: 'POST',
        url: 'sql/add_to_favorites.php',
        data: {id: string},
        success: function() {
            console.log('success');
        }, 
        error: function(xhr, textStatus, thrownError, data) {
        alert("Error: " + thrownError);}
    });
};

function deleteUser(id) {
    var user_id = id;
    $.ajax({
        url: 'sql/delete_user.php',
        type: 'POST',
        data: {user_id: user_id},
        success: function() {
            console.log(this.data);
        }, 
        error: function(xhr, textStatus, thrownError, data) {
            alert("Error: " + thrownError);
        }
    });
    location.reload();
};

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })


  function editUser(e) {
      const id = e;
      $.ajax({
        url: 'sql/editUser.php',
        type: 'POST',
        data: {user_id: id},
        success: function() {
            console.log(this.data);
        }, 
        error: function(xhr, textStatus, thrownError, data) {
            alert("Error: " + thrownError);
        }
    });
  }

