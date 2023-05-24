<?php
$router->addRoute('GET', '/', function () { \Unified\Lithium\Store\View::get('home', 'Home'); });

$router->addRoute('GET', '/toc', function () { \Unified\Lithium\Store\View::get('legal/terms', 'TOC'); });
$router->addRoute('GET', '/btoc', function () { \Unified\Lithium\Store\View::get('legal/bterms', 'Simpler TOC'); });
$router->addRoute('GET', '/privacy', function () { \Unified\Lithium\Store\View::get('legal/privacy', 'Privacy'); });

$router->addRoute('GET', '/project', function () { \Unified\Lithium\Store\View::get('projects/index', 'Projects'); });
$router->addRoute('GET', '/project/zinc', function () { \Unified\Lithium\Store\View::get('projects/zinc', 'Zinc'); });
$router->addRoute('GET', '/project/lithium', function () { \Unified\Lithium\Store\View::get('projects/lithium', 'Lithium'); });

$router->addRoute('GET', '/patreon', function () { header("Location: https://www.patreon.com/unifiedorg"); });
$router->addRoute('GET', '/kofi', function () { header("Location: https://ko-fi.com/unified"); });

$router->setNotFound(function () {
  header('HTTP/1.0 404 Not Found');
  \Unified\Lithium\Store\View::get("error/notFound", "404");
});
