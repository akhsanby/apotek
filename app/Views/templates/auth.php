<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?= $title; ?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- <link rel="stylesheet" href="/css/all.min.css"> -->
      <!-- <link rel="stylesheet" href="/css/ionicons.min.css"> -->
      <link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
      <link rel="stylesheet" href="/css/adminlte.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page">

        <?= $this->renderSection('content') ?>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="/js/adminlte.min.js"></script>

    </body>
</html>