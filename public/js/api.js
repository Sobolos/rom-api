$(document).ready(function()
{
    let domain = "http://rom-api.lsite";
    let session_id;
    $('#connect').click(function (){
        let query = {"cmd": "connect"};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: query,
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
            data: query,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });

    $('#random').click(function (){
        let len = $('#til').val();
        if(len > 0){
            let query = {"cmd": "random", "uid": session_id, "len": len};
            $.ajax({
                type: "POST",
                url: domain+"/api/index.php",
                data: query,
                dataType: "json",
                success: function(data){
                    console.log(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            });
        }
    });

    $('#stat').click(function (){
        let query = {"cmd": "stat", "uid": session_id};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: query,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });

    $('#fwinfo').click(function (){
        let file = $('#file').val();
        let query = {"cmd": "fwinfo", "uid": session_id, "file_name": file};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: query,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
    $('#fwget').click(function (){
        let file = $('#file2').val();
        let start = $('#start').val();
        let bytes = $('#bytes').val();

        if(bytes > 0 && start > 0){
            let query = {"cmd": "fwget", "uid": session_id, "file_name": file, "start": start, "bytes": bytes};
            $.ajax({
                type: "POST",
                url: domain+"/api/index.php",
                data: query,
                dataType: "json",
                success: function(data){
                    console.log(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            });
        }
    });
    $('#analytics').click(function (){
        let query = {"cmd": "analytics", "uid": session_id};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: query,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
    $('#disconnect').click(function (){
        let query = {"cmd": "disconnect", "uid": session_id};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: query,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
    $(window).on("unload", function(e) {
        let query = {"cmd": "disconnect", "uid": session_id};
        $.ajax({
            type: "POST",
            url: domain+"/api/index.php",
            data: query,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
});