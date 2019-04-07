$(document).ready(function() {
    showPrompt();
    submitData();
    uploadInfoToDatabase();
    login();
    exitDataUpload();
});

//submits form
function submitData() {
    $("form").on("submit", function(e) {
        let searchText = $("#search-text").val();
        let opisanie = $("#opisanie");
        let city = $("#city");
        let img = $(".image");
        e.preventDefault();
        $.ajax({
            url: "info.php",
            type: "GET",
            contentType: "application/json;charset=utf-8",
            dataType: "json",
            data: { search: searchText },
            success: function(res, textStatus) {
                opisanie.text(res.opisanie);
                city.text(res.name);
                city.show();
                img.html("<img src='" + res.img + "' title='" + res.name + "' />");

            },
            error: function() {
                let err = "No data found";
                opisanie.text("");
                img.html("");
                city.hide();
                opisanie.text(err);
            }




        });

    });
}

//show prompt dropdown if serch field length >2
function showPrompt() {
    $("#search-text").on("input", function(e) {
        let elem = $(this);
        let that = elem.val();
        let len = that.length;
        let prompt = $("#prompt");
        if (len < 3) {
            prompt.css("display", "none");
            return;
        } else {

            prompt.html("");
            $.ajax({
                url: "search.php",
                type: "GET",
                contentType: "application/json;charset=utf-8",
                dataType: "json",
                data: { search: that },
                success: function(res) {
                    let txt = "<ul>";
                    res.forEach(element => {
                        txt += "<li>" + element + "</li>";
                    });
                    txt += "</ul>";
                    prompt.html(txt);
                    prompt.css("display", "block");

                },
                error: function(er) {
                    console.log(er.responseText);
                }




            });
        }
    });

    //copies data from prompt to search input
    $("#prompt").on("click", function(e) {
        var that = this;
        $("#search-text").val($(e.target).text());
        $(that).css("display", "none");
    });

}

//upload data to database
function uploadInfoToDatabase() {
    let cityName = $("#cityName");
    let description = $("#description");
    $("#upload").on("click", function(e) {

        let dataString = $("form").serialize();
        dataString += "&image=" + $('input[type=file]')[0].files[0];



        $.ajax({
            url: "upload_service.php",
            type: "POST",
            data: new FormData($("form")[0]),
            processData: false,
            contentType: false,
            success: function(res) {

                cityName.val("");
                description.val("");
            },
            error: function(er) {
                console.log(er)
            }

        });
        e.preventDefault();

    });




}

function login() {
    var msg = $('#error-msg');
    //msg.hide();
    $("#login-btn").on('click', function(e) {
        $.get({
            url: "login_service.php",
            data: $(".login-form").serialize(),
            contentType: "text/html;charset=utf-8"
        }).done(function(res) {

            if (res !== "success") {
                msg.show();
                msg.html("Невалидно име и/или парола!");
            } else {
                msg.hide();
                window.location.href = "upload.php";
            }
        }).fail(function(error) {
            console.log(error);
        });
        e.preventDefault();
    });
}


//exits data upload and navigates to search page
function exitDataUpload() {
    $.get({
        url: "upload.php",
        data: { exitUpload: true }
    }).done(function(res) {

    }).fail(function(error) {
        console.log(error);
    });
}