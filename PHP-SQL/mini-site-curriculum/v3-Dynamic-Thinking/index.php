<?php
ini_set('display_errors', 1); //0 to disable
error_reporting(E_ALL);

//1. GET PAGE
$page = $_GET['page'] ?? 'home';

//2. PREPARE FILE PATH
$ext              = '.html';
$html_file        = $page.$ext; 
$html_file_path   = 'html/'.$html_file; //echo $html_file_path;

//3. GET FILE CONTENT
if(file_exists($html_file_path)) {
  $content = file_get_contents($html_file_path);
}
else {
  $content = 'The page you are looking for is not here.';
}
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>This will be the dynamic global title</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PLACEHOLDER FOR site description">
    <meta name="keywords" content="PLACEHOLDER FOR site keywords">
    <meta name="author" content="PLACEHOLDER FOR author">

    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:300,400">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <!-- HEADER -->
    <header class="header">

      <!-- Logo -->
      <figure class="logo-figure">
        <a href="./"><img src="img/logo.svg" alt="The heavy metal company"></a>
      </figure>

      <!-- Nav -->
      <nav class="nav">
        <ul class="menu">
          <li class="menu-item active"><a href="?page=home">HOME</a></li>
          <li class="menu-item"><a href="?page=work">WORK</a></li>
          <li class="menu-item"><a href="?page=contact">CONTACT</a></li>
          <li class="menu-item"><a href="?page=bob">BOB</a></li>
        </ul>
      </nav>

    </header>


    <!-- CONTENT -->
    <main class="content">

      <!-- Main Title -->
      <h1 class="main-title">PLACEHOLDER for page title...</h1>

      <!-- HTML content -->
      <!-- <p>This will be the dynamic page content...</p> -->
      <?php echo $content; ?>

    </main>


    <!-- FOOTER -->
    <footer class="footer">
      <p>&copy;1998 - <?php echo date('Y'); ?> - Heavy Metal Company</p>
    </footer>

  </body>

</html>