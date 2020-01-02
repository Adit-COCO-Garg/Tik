$(document).ready(function() {
    $('form').submit(function(event) { 
        $('#std_id + .throw_error').empty(); 
        $('#std_name + .throw_error').empty(); 
        $('#Grade + .throw_error').empty(); 
        $('#Age + .throw_error').empty(); 
        $('#Phone + .throw_error').empty(); 
        $('#success').empty();
        
        var postForm = { 
            'std_id': $('#std_id').val(),
    'std_name': $('#std_name').val(),
    'Grade': $('#Grade').val(),
    'Age': $('#Age').val(),
    'Phone': $('#Phone').val()
        };
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: postForm,
            dataType: 'jso n',
            success: function(data) {
                console.log(data);
                if (!data.success) {
                    if (data.errors.std_id) {
                        console.log(data.errors.std_id);
                        $('#std_id + .throw_error').fadeIn(1000).html(data.errors.std_id);
                    }
                    if (data.errors.std_name) {
                        console.log(data.errors.std_name);
                        $('#std_name + .throw_error').fadeIn(1000).html(data.errors.std_name);
                    }
                    if (data.errors.Grade) {
                        console.log(data.errors.Grade);
                        $('#Grade + .throw_error').fadeIn(1000).html(data.errors.Grade);
                    }
                    if (data.errors.Age) {
                        console.log(data.errors.Age);
                        $('#comment + .throw_error').fadeIn(1000).html(data.errors.Age);
                    }
                    if (data.errors.Phone) {
                        console.log(data.errors.Phone);
                        $('#comment + .throw_error').fadeIn(1000).html(data.errors.Phone);
                    }

                } else {
                    checkdatabase();
                    $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>');
                }
            }
        });
        event.preventDefault();
    });

    function checkdatabase() {
        $('#output').empty();
        $.ajax({
            url: 'data.php',
            dataType: 'json',
            cache: false,
            success: function(data) {
                var i = 0;
                $.each(data, function(index) {
                    i++;
                    console.log(data[index]);
                    $('#output').append("<tr>");
                    $('#output').append("<td>" +  data[index].std_id +"</td>");
                    $('#output').append("<td>" +  data[index].std_name +"</td>");
                    $('#output').append("<td>" +  data[index].Grade +"</td>");
                    $('#output').append("<td>" +  data[index].Age +"</td>");
                    $('#output').append("<td>" +  data[index].Phone +"</td>");
                    $('#output').append("<td>" +  data[index].perf_grade +"</td>");
                    $('#output').append("</tr>");
                });
            }
        });
    }
    checkdatabase();
});