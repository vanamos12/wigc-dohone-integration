<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/ct-88x109.jpg" type="image/x-icon">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="admin/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="admin/assets/tether/tether.min.css">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/custom.css">
    <link rel="stylesheet" href="admin/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="admin/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="admin/assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="admin/assets/theme/css/style.css">
    <link rel="stylesheet" href="admin/assets/mobirise/css/mbr-additional.css" type="text/css">
    <style>
        .panel h3 {
            color: white;
        }

        .panel a {
            color: white;
        }

        .panel p {
            color: white;
        }
    </style>


</head>

<body>

    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <div class="divid texte-center"></div>
                    <h2>Information</h2>
                    <img width="150px" height="150px" id="loader" src="assets/images/loading.gif" alt="Loading" />
                </div>
                <!--
    <form id="Login" method="POST" action="index.php">

        <button type="submit" name="login" class="btn btn-primary">Retour</button>

    </form>
    -->
            </div>
        </div>
    </div>
    </div>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("page loaded");
            $.ajax({
                url: "getbookbuyed.php",
                method: "GET",
                data: {},
                success: function(data) {
                    data = JSON.parse(data);
                    console.log(data);
                    if (data.bookbuyed) {
                        $("<a>", {
                            html: "Download"
                        }).attr({
                            href: "download.php?file=" + data.bookname
                        }).appendTo($('.panel'));
                    } else {
                        $("<p>", {
                            html: "Vous n'avez pas droit au livre."
                        }).appendTo($('.panel'));
                    }

                    $('#loader').hide()
                },
                error: function() {

                    $("<p>", {
                        html: "Erreur de téléchargement."
                    }).appendTo($('.panel'));

                    $('#loader').hide();

                }
            })
        });
    </script>
</body>

</html>