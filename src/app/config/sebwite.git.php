<?php


return [
    'default' => 'bitbucket',
    'connections' => [
        'github'    => [
            'driver'      => 'github',
            'transformer' => Sebwite\Git\Remotes\Transformers\GithubTransformer::class,
            'credentials' => [ Github\Client::AUTH_HTTP_TOKEN, env('GITHUB_TOKEN', '') ],
            'repository'  => 'robinradic/blade-extensions',
            'branch'      => Sebwite\Git\Manager::BRANCH_MASTER,
            'ref'         => Sebwite\Git\Manager::REFERENCE_HEAD
        ],
        'bitbucket' => [
            'driver'      => 'bitbucket',
            'transformer' => Sebwite\Git\Remotes\Transformers\BitbucketTransformer::class,
            'credentials' => [
                'key'    => env('BITBUCKET_CLIENT_KEY', ''),
                'secret' => env('BITBUCKET_CLIENT_SECRET', '')
            ],
            'repository'  => 'sebwitepackages/sebwite-support',
            'branch'      => Sebwite\Git\Manager::BRANCH_MASTER,
            'ref'         => Sebwite\Git\Manager::REFERENCE_HEAD
        ]
    ],
];
