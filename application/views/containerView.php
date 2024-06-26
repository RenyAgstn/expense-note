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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">DENAPP</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="<?= base_url('/index.php')?>" >Home</a>
            <a class="nav-link " href="<?= base_url('/index.php/history')?>">History</a>
            <a class="nav-link " href="<?= base_url('/index.php/formulirci')?>">Form</a>
          </nav>
        </div>
      </header>

	  <?php $this->load->view($content) ?>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="text-dark">Daily Expense Note App</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
