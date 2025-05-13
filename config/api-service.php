<?php

return [
    'navigation' => [
        'token' => [
            'cluster' => null,
            'group' => 'User',
            'sort' => -1,
            'icon' => 'heroicon-o-key',
        ],
    ],
    'resources' => [
        'token' => [
            'pages' => [
                'list_records' => \Rupadana\FilamentApiService\Resources\TokenResource\Pages\ListTokens::class,
                'create_record' => \Rupadana\FilamentApiService\Resources\TokenResource\Pages\CreateToken::class, 
            ],
          
            'sync_token_abilities_to_user_permissions' => false,
            'permission_sync_mode' => 'merge', 
        ],
    ],
    'models' => [
        'token' => [
            'enable_policy' => true,
        ],
    ],
    'route' => [
        'panel_prefix' => true,
        'use_resource_middlewares' => false,
    ],
    'tenancy' => [
        'enabled' => false,
        'awareness' => false,
    ],
    'login-rules' => [
        'email' => 'required|email',
        'password' => 'required',
    ],
    'use-spatie-permission-middleware' => true,
];
