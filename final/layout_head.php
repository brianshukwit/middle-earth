<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo isset($page_title) ? $page_title : "Books for All, All for Books"; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
    <!-- custom css for users -->
    <link href=css/user.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" media="screen" href="css/masthead.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
 
</head>
<body>
 
    <?php 
    include 'navigation.php'; 
    
    ?>
 
    <!-- container -->
    <div class="container">
        <div class="row">
 
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "Books for All, All for Books"; ?></h1>
            </div>
        </div>