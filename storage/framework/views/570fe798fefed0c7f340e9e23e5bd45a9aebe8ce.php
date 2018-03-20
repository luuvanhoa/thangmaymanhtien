<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title> Thang máy Mạnh Tiến </title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<?php echo Html::style('css/front-end/inline.css'); ?>

		<?php echo Html::style('css/front-end/style.css'); ?>

		<?php echo Html::style('css/front-end/font.css'); ?>

		<?php echo Html::style('css/front-end/custom.css'); ?>


		<!-- JQUERY VALIDATE -->
		<?php echo Html::script('js/front-end/jquery.js'); ?>

		<?php echo Html::script('js/front-end/jquery-migrate.min.js'); ?>

		<?php echo Html::script('js/front-end/customscripts.js'); ?>


		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?php echo e(asset('img/favicon/favicon.ico')); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo e(asset('img/favicon/favicon.ico')); ?>" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	</head>
	<body>
		<div class="main-container">
			<?php echo $__env->make('layouts/fronts/menu-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>