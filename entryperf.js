$(document).ready(function() {
    function checkdatabase() {
        $('#output').empty();
        $.ajax({
            url: 'dataperfe.php',
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
                    $('#output').append("<td>" +  data[index].January +"</td>");
                    $('#output').append("<td>" +  data[index].Feburary +"</td>");
                    $('#output').append("<td>" +  data[index].March +"</td>");
                    $('#output').append("<td>" +  data[index].April +"</td>");
                    $('#output').append("<td>" +  data[index].May +"</td>");
                    $('#output').append("<td>" +  data[index].June +"</td>");
                    $('#output').append("<td>" +  data[index].July +"</td>");
                    $('#output').append("<td>" +  data[index].August +"</td>");
                    $('#output').append("<td>" +  data[index].September +"</td>");
                    $('#output').append("<td>" +  data[index].October +"</td>");
                    $('#output').append("<td>" +  data[index].November +"</td>");
                    $('#output').append("<td>" +  data[index].December +"</td>");

                    $('#output').append("</tr>");
                });
            }
        });
    }
    checkdatabase();
});