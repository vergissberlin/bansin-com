<!DOCTYPE html>
<html lang="de">
	<head>
		<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo html($site->description()) ?>" />
		<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
		<meta name="robots" content="index, follow" />
		<?php echo css('assets/css/bootstrap.css') ?>
		<style>body { padding-top: 60px; }</style>
		<?php echo css('assets/css/bootstrap-responsive.css') ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="/assets/ico/favicon.png">
		</head>
	<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo url() ?>"><?php echo html($site->title()) ?></a>
          <div class="nav-collapse collapse">

<?php snippet('menu') ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">