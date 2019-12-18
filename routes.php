<?php

// Create Router instance
$router = new Router();

// example.com
$router->get('', 'PagesController@home');
$router->get('', 'PagesController@login'); 

// example.com/a-propos
$router->get('a-propos', 'PagesController@about');

// example.com/contact
$router->get('contact', 'PagesController@contact');

// reception des données 
$router->post('contact', 'PagesController@contact');

// pages avec parametre 
$router->get('plateforme/update/{id}', 'PlateformesController@update');

//Connexion utilisateur
$router->get('login', 'PagesController@login'); 
$router->post('login', 'PagesController@login');

// Page Tag

// $router->get('tag', 'TagController@allTags'); 

// pages sites  PageController
$router->get('site', 'PagesController@all');

// page INFO d'un seul site
$router->get('site/{id}/{slug}', 'PagesController@show');


//Inscription utilisateur
$router->get('signup', 'PagesController@signup'); 
$router->post('signup', 'PagesController@signup');



//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------ADMIN---------------------------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

            //admin AJOUTER un site
$router->get('admin/site', 'AdminController@allSite');
$router->get('admin/site/add', 'AdminController@addSite');
$router->post('admin/site/add', 'AdminController@addSite');


            //admin DELETE un site
$router->get('admin/site/delete/{id}', 'AdminController@deleteSite');


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------RECHERCHE-----------------------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

$router->get('search', 'RechercheController@search'); 



//déconnexion
$router->get('logout', 'PagesController@logout'); 


// page 404
$router->set404('PagesController@page404');

// Run the routes
$router->run();