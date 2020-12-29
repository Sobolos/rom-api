$(document).ready(function()
{
    let domain = "http://test.lsite";
    let session_id;
    $('#connect').click(function (){
        let query = {"cmd": "connect"};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: {query: query},
            dataType: "json",
            success: function(data){
                console.log(data);
                session_id = data['session_id']
                console.log(session_id);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });

    $('#ping').click(function (){
        let query = {"cmd": "ping", "uid": session_id};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: {query: query},
            //dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    })
});