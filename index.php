<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../email/Bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../email/Bootstrap/css/bootstrap.min.css">

    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="../email/Style/index.css">
    <title>E-mail form!</title>
    <?php
    $emailTo = $_POST['emailTo'];
    $object = $_POST['object'];
    $bodyMsg = $_POST['body'];
    $header = "From : Tufast";

    if (mail($emailTo, $object, $bodyMsg, $header)) {
        
    ?>
        <div class="container-sm">
            <div class="row-cols-sm-6">
                <div class="alert alert-success popup_done" role="alert"  style="border: 1px solid violet; background-color:violet; color:black">
                    <h4 class="alert-heading">Success!</h4>
                    <p>The email was sent successfully!</p>
                    <hr>
                    <p class="mb-0">Check your inbox to be sure.</p>
                </div>
            </div>
        </div>
    <?php
    } else {

        header('HTTP/1.1 404 Not Found');
    }



    ?>



</head>

<body>
    <div class="container-sm">
        <form action="../email/index.php" method="POST">
            <div class="container_tot row-cols-sm-6">
                <span class="lbl_com">Enter the recipient's email</span>
                <input class="txt_email" type="text" name="emailTo" id="emailTo" placeholder="E-mail to" autocomplete="false">

                <span class="lbl_com">Enter the subject of the email</span>
                <input class="txt_email" type="text" name="object" id="object" placeholder="Object" autocomplete="false">

                <span class="lbl_com txt_body">Enter the body of the email</span>
                <textarea class="body_email" name="body" id="body_email"></textarea>

                <input onclick="controllo()" class="btn_send" type="submit" value="Send">
            </div>
        </form>

    </div>
</body>
<script>
    function controllo() {

        let mail = document.getElementById('emailTo').value;
        let object = document.getElementById('object').value;
        let msg = document.getElementById('body_email').value;

        if (mail == "" || mail == "undefined" || object == "" || object == "undefined" || msg == "" || msg == "undefined") {

            alert('Inserire le credenziali');
        }

    }
</script>

</html>