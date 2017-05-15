#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/1eb48d54b5.js"></script>

  </head>
  <body>
    <?php include 'dentist-nav.php' ?>


    <div class="container">
      <?php include 'appointmentform.php' ?>
    </div>


   <?php include 'dentist-footer.php' ?>

   <script src="functions.js"></script>
  </body>
</html>
