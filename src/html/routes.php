<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// ##################################################
// ##################################################
// ##################################################

get('/', 'portada.php');
get('/p1', 'p1.php');
get('/p2', 'p2.php');
get('/p3','p3.php');
get('/p4', 'p4.php');
get('/p5', 'p5.php');
get('/p6','p6.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
