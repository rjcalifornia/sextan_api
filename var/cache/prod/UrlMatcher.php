<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'sextans_api', '_controller' => 'App\\Controller\\SextansApiController::index'], null, null, null, false, false, null]],
        '/api/v1/show-contacts' => [[['_route' => 'show_contacts_api', '_controller' => 'App\\Controller\\SextansApiController::ShowAllContactsAction'], null, null, null, true, false, null]],
        '/api/v1/save-contact' => [[['_route' => 'save_contact_api', '_controller' => 'App\\Controller\\SextansApiController::saveSingleMessageAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
