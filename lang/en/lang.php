<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'VDLP Maintenance Plugin',
        'description' => 'Plugin for the maintenance page',
    ],
    'responses' => [
        'ajax' => [
            'message' => 'Sorry, we’re currently down for maintenance. We expect to be back soon. Thanks for your patience.',
        ],
        'view' => [
            'title' => 'Sorry, we’re currently down for maintenance.',
            'message' => 'We expect to be back soon. Thank you for your patience.',
        ],
    ],
];
