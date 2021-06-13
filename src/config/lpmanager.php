<?php

return [
    /*
     * Enable it?
     */
    'web_interface_enabled' => env('ENABLE_LPMANAGER', true),
    /*
    * Route used to access
    */
    'route' => 'lpmanager',
    /*
     * Deffer booting for middleware use
     */
    'use_middleware' => false,
    /*
     * If use middelware, provide the name of the middleware used
     */
    'use_middleware_name' => 'isAdmin',
  ];
