$(document).ready(function() {

    $("#submit-create-project").click(function(event) {
        event.preventDefault();
        console.log('aaaaaaaaaaaaaaaaaaaaaa');

        var form = $(this).closest('form');

        var url = form.attr('action');

        //console.log(form.attr('action'));

        var name = $("#name").val();
        var introduction = $("#introduction").val();
        var created_at = $("#created_at").val();
        var location = $("#location").val();
        var cost = $("#cost").val();

        if(name==''||introduction==''||created_at==''||location==''||cost=='') {
            alert("Please fill all fields.");
            return false;
        }

        $.ajax({
            type: "POST",
            url: url,
            data: {
                name: name,
                introduction: introduction,
                created_at: created_at,
                location: location,
                cost: cost
            },
            cache: false,
            success: function(data) {
                alert(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});
