<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
<<<<<<< HEAD
<<<<<<< HEAD
    'allowedOriginsPatterns' => ['*'],//'Content-Type', 'X-Requested-With'
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['*'],
=======
    // 'allowedOriginsPatterns' => ['*'],
=======
    'allowedOriginsPatterns' => ['*'],
>>>>>>> modemb/dev
    'allowedHeaders' => ['*'],// 'Content-Type', 'X-Requested-With'
    'allowedMethods' => ['*'],// ex: ['GET', 'POST', 'PUT',  'DELETE']
>>>>>>> modemb/dev
    'exposedHeaders' => [],
    'maxAge' => 0,

];
