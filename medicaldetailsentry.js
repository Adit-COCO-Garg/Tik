$(document).ready(function() {
    function checkdatabase() {
        $('#output').empty();
        $.ajax({
            url: 'medicaldetailsdata.php',
            dataType: 'json',
            cache: false,
            success: function(data) {
                var i = 0;
                $.each(data, function(index) {
                    i++;
                    console.log(data[index]);
                    $('#output').append("<tr>");
                    $('#output').append("<td>" +  data[index].std_id +"</td>");
                    $('#output').append("<td>" +  data[index].st_name +"</td>");
                    $('#output').append("<td>" +  data[index].blood_type +"</td>");
                    $('#output').append("<td>" +  data[index].phys_conn +"</td>");
                    $('#output').append("<td>" +  data[index].ment_conn +"</td>");
                    $('#output').append("<td>" +  data[index].breath_conn +"</td>");
                    $('#output').append("<td>" +  data[index].sex +"</td>");
                    $('#output').append("<td>" +  data[index].phone +"</td>");
                    $('#output').append("</tr>");
                });
            }
        });
    }
    checkdatabase();
});