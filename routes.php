<?php

// Create Router instance
$router = new Router();

// example.com
$router->get('', 'PagesController@home');
$router->get('', 'PagesController@login'); 


//---------------------------------------------------------------------------------------------------------\\
// -------------------------------------UTILISATEUR (PAGES CONTROLLER)-------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
            //Connexion utilisateur
$router->get('login', 'PagesController@login'); 
$router->post('login', 'PagesController@login');

            //déconnexion
$router->get('logout', 'PagesController@logout'); 

            //Inscription utilisateur
$router->get('signup', 'PagesController@signup'); 
$router->post('signup', 'PagesController@signup');

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------PAGE CONTROLLER-----------------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

            // pages sites  PageController
$router->get('site', 'PagesController@all');

            // page INFO d'un seul site
$router->get('site/{id}/{slug}', 'PagesController@show');

            // affiche les sites par tag
$router->get('tagsite/{id}/{slug}', 'PagesController@allSitesByTag');

            //a-propos
$router->get('a-propos', 'PagesController@about');

            // contact
$router->get('contact', 'PagesController@contact');

            // reception des données 
$router->post('contact', 'PagesController@contact');

// page 404
$router->set404('PagesController@page404');

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


// Run the routes
$router->run();