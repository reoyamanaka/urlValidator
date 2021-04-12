$(document).ready(function() {
    $("urlSubmit").click(function(){
        var url = $("formUrl").val();
    });


    $("form").submit(function(event) {
        event.preventDefault();
        var url = $("#formUrl").val();
        if (url.substring(0, 8) != "https://" && url.substring(0, 7) != "http://" && url !== "") {
            alert("You forgot to include a http:// or a https://");
            throw new Error("You forgot to include a http:// or a https://");
        }
        console.log(url.search(/\./));
        console.log(url);
        if (url.search(/\./) === -1) {
            alert("Invalid URL.");
            throw new Error("Invalid URL.");
        }
        var submit = $("#urlSubmit").val();
        $(".formMessage").load("backendValidation.php", {
            url: url,
            submit: submit
        });
    });
});