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
});


// editable table plugin

$(function() {

    $('#makeEditable').SetEditable({ 
        $addButton: $('#but_add'),
        columnsEd: "0,2,3",
        onEdit: function(e) { 
            const id = $(e[0]).children()[0].textContent;
            const mail = $(e[0]).children()[1].textContent;
            const type = $(e[0]).children()[3].textContent;
            const name = $(e[0]).children()[4].textContent;

            $.ajax({
                url: 'sql/update_user.php',
                type: 'POST',
                data: {
                    user_id: id,
                    mail: mail,
                    type: type,
                    name: name,
                },
                success: function() {
                    console.log(this.data);
                }, 
                error: function(xhr, textStatus, thrownError, data) {
                    alert("Error: " + thrownError);
                }
            });
        },

        onBeforeDelete: function(e) { 
            const id = $(e[0]).children()[0].textContent;

            $.ajax({
                url: 'sql/delete_user.php',
                type: 'POST',
                data: {user_id: id},
                success: function() {
                    console.log(this.data);
                }, 
                error: function(xhr, textStatus, thrownError, data) {
                    alert("Error: " + thrownError);
                }
            });
        },
    });

});

// make movie table editable

$(function() {

    $('#makeEditableMovies').SetEditable({ 
        $addButton: $('#but_add'),
        columnsEd: "0,1,2,3,4,5,6",
        onEdit: function(e) { 
            const id = parseInt($(e[0]).children()[0].textContent);
            const title = $(e[0]).children()[1].textContent.toString();
            const tmdb = $(e[0]).children()[2].textContent.toString();
            const director = $(e[0]).children()[3].textContent.toString();
            const year = parseInt($(e[0]).children()[4].textContent);
            const prod = $(e[0]).children()[5].textContent.toString();
            const plot = $(e[0]).children()[6].textContent.toString();

            $.ajax({
                url: 'sql/update_movie.php',
                type: 'POST',
                data: {
                    id: id,
                    title: title,
                    tmdb: tmdb,
                    director: director,
                    year: year,
                    prod: prod,
                    plot: plot
                },
                success: function() {
                    console.log(this.data);
                }, 
                error: function(xhr, textStatus, thrownError, data) {
                    alert("Error: " + thrownError);
                }
            });
        },

        onBeforeDelete: function(e) { 
            const id = $(e[0]).children()[0].textContent.toString();

            $.ajax({
                url: 'sql/delete_movie.php',
                type: 'POST',
                data: {movie_id: id},
                success: function() {
                    console.log(this.data);
                }, 
                error: function(xhr, textStatus, thrownError, data) {
                    alert("Error: " + thrownError);
                }
            });
        },
    });

});


