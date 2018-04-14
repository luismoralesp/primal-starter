<?php
  /**
   * Import kernel framework and routing 
   */
  require_once '../vendor/luismoralesp/primal/kernel/Kernel.php';
  require_once '../vendor/luismoralesp/primal/kernel/Router.php';
  /**
   * Set a default routing
   */
  $router = Router::getInstance('myapp.myapp.index');
  /**
   * Configure routing
   */
  $router->setUrls([
      'hi' => 'myapp.myapp.index'
  ]);
  /**
   * Show routed service
   */
  echo $router->rout(realpath(dirname(__FILE__)) . '/..');
