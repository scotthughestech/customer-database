<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer Database</title>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/signin.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form data-bind="submit: login" class="form-signin">
        <h2 class="form-signin-heading">Customer Database</h2>
        <label for="inputUser" class="sr-only">User</label>
        <input data-bind="textInput: user" type="text" id="inputUser" class="form-control" placeholder="User" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input data-bind="textInput: password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Knockout JS -->
    <script src="<?php echo base_url('assets/js/knockout.min.js'); ?>"></script>
    <!-- Javascript utility functions -->
    <script>
        function base_url(url) {
            return '<?php echo base_url(); ?>' + url;
        }
        function site_url(url) {
            return '<?php echo site_url(); ?>' + '/' + url;
        }
    </script>
    <!-- Custom javascript -->
    <script src="<?php echo base_url('assets/js/login.js'); ?>"></script>
  </body>
</html>