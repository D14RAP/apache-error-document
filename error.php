<?php
    $error = array(
        "400" => array("Bad Request", "The request cannot be fulfilled due to bad syntax."),
        "401" => array("Unauthorized", "The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided."),
        "403" => array("Forbidden", "The request was a legal request, but the server is refusing to respond to it."),
        "404" => array("Not Found", "The requested page could not be found but may be available again in the future."),
        "500" => array("Internal Server Error", "A generic error message, given when no more specific message is suitable."),
        "502" => array("Bad Gateway", "The server was acting as a gateway or proxy and received an invalid response from the upstream server."),
        "503" => array("Service Unavailable", "The server is currently unavailable (overloaded or down)."),
    );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_SERVER["REDIRECT_STATUS"] . " " . $error[$_SERVER["REDIRECT_STATUS"]][0]; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha256-j+P6EZJVrbXgwSR5Mx+eCS6FvP9Wq27MBRC/ogVriY0=" crossorigin="anonymous">
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid mb-0" style="background:#fff;">
            <div class="container animated fadeInUp">
                <h1 class="display-3 mb-0"><strong><?php echo $_SERVER["REDIRECT_STATUS"]; ?></strong> <span class="text-muted"><?php echo $error[$_SERVER["REDIRECT_STATUS"]][0]; ?></span></h1>
                <p class="lead mt-4 mb-0"><?php echo $error[$_SERVER["REDIRECT_STATUS"]][1]; ?></p>
            </div>
        </div>
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>-->
    </body>
</html>
