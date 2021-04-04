<?php
    if (isset($_POST["submit"])) {
        $url = $_POST["url"];
        
        $errorEmpty = false;
        $errorUrl = false;

        if (empty($url)) {
            echo "<span class='formError'>Fill in a URL!</span>";
            $errorEmpty = true;
        }
        else if (!filter_var($url, FILTER_VALIDATE_URL)) {
            echo "<span class='formError'>Write a valid url.</span>";
            $errorUrl = true;    
        } else if (mb_substr($url, 0, 8) != "https://" && mb_substr($url, 0, 7) != "http://") {
            echo "<span class='formError'>You must include either a http:// or a https://</span>";
            $errorUrl = true;
        }
        else {
            echo "<span class='formSuccess'>Submission successful.</span>";
        }
    } else {
        echo "There was an error.";
    }
?>

<script>
    $("#formUrl").removeClass("inputError");

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorUrl = "<?php echo $errorUrl; ?>";

    if (errorEmpty == true) {
        $("#formUrl").addClass("inputError");
    }
    if (errorUrl == true) {
        $("#formUrl").addClass("inputError");
    }
    if (errorEmpty == false && errorUrl == false) {
        $("#formUrl").val("");
    }
</script>