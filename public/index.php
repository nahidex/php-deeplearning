<?php require '../app/start.php'; ?>
<?php $app->run();

var_dump($app->auth->username);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="bower_components/bootstrap-material-design/dist/css/roboto.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-material-design/dist/css/material.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-material-design/dist/css/ripples.min.css" rel="stylesheet">
</head>
<body>






<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
<script src="bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</body>
</html>