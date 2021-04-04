$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        var url = $("#formUrl").val();
        var submit = $("#urlSubmit").val();
        $(".formMessage").load("backendValidation.php", {
            url: url,
            submit: submit
        });
    });
});