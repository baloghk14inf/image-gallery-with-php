<?php


    /**
     * $siteName: ide írd az alkalmazás nevét
     */
    $siteName = "Photo Galery";
    /**
     * lehetséges oldalméret értékek
     */
    $possiblePageSize= [5, 10, 20, 30, 50, 100];
    
    /**
     * Adatbázis kapcsolodáshoz szükséges adat
     */
    $config['db_host'] = 'localhost';
    $config['db_user'] = 'phpalapok';
    $config['db_pass'] = 'phpalapok';
    $config['db_name'] = 'phpalapok';

/**
 * $routes - utvonalaktat tároló tömb
 */
    $routes = [];
// utvonalak felvétele a $routes tömbbe
$routes['GET']['/'] = 'homeController';
$routes['GET']['/about'] = 'aboutController'; //about route létrehozása , már előre létre volt hozva
$routes['GET']['/image/(?<id>[\d]+)'] = 'singleImageController';
$routes['POST']['/image/(?<id>[\d]+)/edit'] = 'singleImageEditController'; //?<id> -csoport elnevezése
$routes['POST']['/image/(?<id>[\d]+)/delete'] = 'singleImageDeleteController'; // delete rout-ot már létrehoztuk órán

$routes['GET']['/login'] = 'loginFormController'; //ez pedig az hogy ha csak simán a bejelentkezés formra szeretnénk menni
$routes['POST']['/login'] = 'loginSubmitController'; // ez figja majd meghatározni a miros figyelmeztetést (tehát ha hiba lenne)
$routes['GET']['/logout'] = 'logoutSubmitController'; //about route létrehozása , már előre létre volt hozva
