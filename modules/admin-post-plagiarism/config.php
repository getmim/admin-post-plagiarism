<?php

return [
    '__name' => 'admin-post-plagiarism',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-post-plagiarism.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-post-plagiarism' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'post-plagiarism' => NULL
            ],
            [
                'admin' => NULL
            ],
            [
                'admin-post' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.post.edit' => [
                'plagiarism' => [
                    'label' => 'Plagiarism',
                    'type' => 'url',
                    'rules' => [
                        'url' => true
                    ]
                ]
            ]
        ]
    ]
];
