<?php
return [
    'initializers' => [
        'Strapieno\NightClubGirl\Model\GirlModelInitializer'
    ],
    'invokables' => [
        'Strapieno\NightClubGirl\Model\Validator\EntityExist' => 'Strapieno\NightClubGirl\Model\Validator\EntityExist'
    ],
    'aliases' => [
        'nightclubgirl-entityexist' => 'Strapieno\NightClubGirl\Model\Validator\EntityExist'
    ],
];