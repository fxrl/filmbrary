// editable table plugin

$(function() {

    $('#userTable').SetEditable({ 
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
        }
    });

});