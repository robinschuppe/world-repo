<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Attractive Modern Header & Footer</title>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/styleBinLayout.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/index.css" /> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/contacts.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/detail.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/faq.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/new.css">

<?php wp_head();?>
</head>
<body>

<header>
  <div class="logo">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/avatar1.png" alt="Logo" />
  </div>

  <div class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false" role="button" tabindex="0">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
  <nav id="nav">
    <a href="<?php echo home_url('/');?>">Home</a>
    <a href="<?php echo home_url('/new');?>">News</a>
    <a href="<?php echo home_url('/faq');?>">FAQs</a>
    <a href="<?php echo home_url('/contacts');?>">Contacts</a>
  </nav>
</header>
