<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR );
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

define('DB_NAME','scolaritebd');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','');

$router = new Router($_GET['url']);


/***
***
    ROUTES DU MODULES NOTES ET RESULTATS
***
***/

$router->get('/notes/insertnote/:id', 'App\Controllers\NoteEtResultatController@insertNote');

$router->post('/notes/editNote/:id', 'App\Controllers\NoteEtResultatController@editNote');

$router->get('/notes', 'App\Controllers\NoteEtResultatController@notes');

$router->get('/notes/:id', 'App\Controllers\NoteEtResultatController@notesMatiere');
// '/posts/:id'
$router->get('detailNoteEleve', 'App\Controllers\NoteEtResultatController@notesEleve');


$router->get('/resultats', 'App\Controllers\NoteEtResultatController@resultats');
$router->get('resul', 'App\Controllers\NoteEtResultatController@AjaxNote');

// **********************************************//
$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/parametre', 'App\Controllers\BlogController@parametre');
$router->post('/uploaddata', 'App\Controllers\BlogController@uploaddata');


$router->get('/posts/:id', 'App\Controllers\BlogController@show');
// route de photo
$router->get('/posts/webcam/:id', 'App\Controllers\BlogController@Webcam');
$router->get('/posts/uploadPhoto/:id', 'App\Controllers\BlogController@UploadPhoto');

// Route pour les PDFs
$router->get('/posts/PdfCertificat/:id', 'App\Controllers\BlogController@PdfCertificat');

$router->get('/posts/PdfCarteLot/Classe/:id', 'App\Controllers\BlogController@PdfCarteLot');
$router->get('/posts/PdfCarte/:id', 'App\Controllers\BlogController@PdfCarte');

$router->get('/posts/PdfBulletin/:id', 'App\Controllers\BlogController@PdfBulletin');


// Route pour les editions 
$router->get('/posts/edit_P/:id', 'App\Controllers\BlogController@edit_P');
$router->get('/posts/edit_C/:id', 'App\Controllers\BlogController@edit_C');
$router->get('/posts/edit_T/:id', 'App\Controllers\BlogController@edit_T');


// $router->get('/posts/edit_Photo/:id', 'App\Controllers\BlogController@edit_Photo');
$router->get('/posts/edit_Pedagogie/:id', 'App\Controllers\BlogController@edit_Pedagogie');
// Route pour les updates
$router->post('/posts/edit/:id', 'App\Controllers\BlogController@update');
$router->post('/posts/edit_T/:id', 'App\Controllers\BlogController@update_T');
$router->post('/posts/edit_Photo/:id', 'App\Controllers\BlogController@update_Photo');
$router->post('/posts/edit_pedagogie/:id', 'App\Controllers\BlogController@update_pedagogie');

// $router->post('/posts/search', 'App\Controllers\BlogController@search');

$router->get('Urlajaxparcours', 'App\Controllers\BlogController@AjaxParcours');

$router->post('envoiNote', 'App\Controllers\BlogController@envoiNote');

$router->get('searchUrl', 'App\Controllers\BlogController@getAjax');
$router->get('saveimage', 'App\Controllers\BlogController@getImage');

$router->get('/createEleve', 'App\Controllers\BlogController@createEleve');
$router->post('/saveEleve', 'App\Controllers\BlogController@saveEleve');

$router->run(); 

