<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daily Expense Note</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('public/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('public/') ?>css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">DENAPP</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">History</a>
            <a class="nav-link" href="#">Form</a>
          </nav>
        </div>
      </header>

	  <?php $this->load->view($content) ?>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Daily Expense Note App</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('public/') ?>js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('public/') ?>js/jquery-slim.min.js"><\/script>')</script>
    <script src="<?= base_url('public/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('public/') ?>js/bootstrap.min.js"></script>
  </body>
</html>
