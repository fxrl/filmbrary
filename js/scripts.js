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

    $.ajax({
        type: 'POST',
        url: 'sql/add_to_favorites.php',
        data: {id: string},
        success: function() {
            console.log(this.data);
        }, 
        error: function(xhr, textStatus, thrownError, data) {
        alert("Error: " + thrownError);}
    });
};

