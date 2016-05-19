<?php
return [
    'invokables' => [
        'Strapieno\NightClubGirl\Model\Hydrator\Mongo\GirlModelMongoHydrator'
            => 'Strapieno\NightClubGirl\Model\Hydrator\Mongo\GirlModelMongoHydrator'
    ],
    'aliases' => [
        'Strapieno\NightClubGirl\Model\Hydrator\GirlModelMongoHydrator'
            => 'Strapieno\NightClubGirl\Model\Hydrator\Mongo\GirlModelMongoHydrator'
    ]
];