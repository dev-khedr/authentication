<?php

use Raid\Guardian\Authenticators\DefaultAuthenticator;
use Raid\Guardian\Matchers\EmailMatcher;
use Raid\Guardian\Norms\MatchingPasswordNorm;

return [

    'default_authenticator' => DefaultAuthenticator::class,

    'authentication_driver' => \Raid\Guardian\Drivers\SanctumDriver::class,

    'guardian_authenticators' => [],

    'authenticator_matchers' => [
        DefaultAuthenticator::class => [
            EmailMatcher::class,
        ],
    ],

    'authenticator_norms' => [
        DefaultAuthenticator::class => [
            MatchingPasswordNorm::class,
        ],
    ],

    'authenticator_sequences' => [],

];
