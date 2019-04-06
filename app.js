$(document).ready(function() {
    showPrompt();
    submitData();
    uploadInfoToDatabase();
    loginToAdmin();
    exitDataUpload();
});

//submits form
function submitData() {
    $("form").on("submit", function(e) {
        let searchText = $("#search-text").val();
        let opisanie = $("#opisanie");
        let city = $("#city");

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
            },
            error: function() {
                let err = "No data found";
                opisanie.text("");
                city.text(err);
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
            prompt.css("display", "block");
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
                },
                error: function(er) {
                    console.log(er);
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

        $.ajax({
            url: "upload-service.php",
            type: "POST",
            data: dataString,
            success: function(res) {
                console.log(res);
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

function loginToAdmin() {
    $("#login-btn").on('submit', function() {
        $.get({
            url: "upload-service.php",
            data: $("form").serialize()
        }).done(function(res) {
            console.log(res);
        }).fail(function(error) {
            console.log(error);
        });
    });
}


//exits data upload and navigates to search page
function exitDataUpload() {
    // $.get({
    //     url: "upload.php",
    //     data: { exitUpload: true }
    // }).done(function(res) {
    //     console.log(res);
    // }).fail(function(error) {
    //     console.log(error);
    // });
}