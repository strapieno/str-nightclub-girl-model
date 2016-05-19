<?php
return [
    'service_manager' => [
        'invokables' => [
            'Strapieno\NightClubGirl\Model\Criteria\Mongo\GirlMongoCollectionCriteria'
                => 'Strapieno\NightClubGirl\Model\Criteria\Mongo\GirlMongoCollectionCriteria'
        ],
        'aliases' => [
            'Strapieno\NightClubGirl\Model\Criteria\GirlCollectionCriteria'
                => 'Strapieno\NightClubGirl\Model\Criteria\Mongo\GirlMongoCollectionCriteria'
        ]
    ],
    'mongodb' => [
        'Mongo\Db' => [
            'database' => 'strapieno',
        ],
    ],
    'mongocollection' => [
        'DataGateway\Mongo\NightClubGirl' => [
            'database' => 'Mongo\Db',
            'collection' => 'nightclub-girl',
        ],
    ],
    'matryoshka-objects' => [
        'NightClubGirl' => [
            'type' => 'Strapieno\NightClubGirl\Model\Entity\GirlEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ]
    ],
    'matryoshka-models' => [
        'Strapieno\NightClubGirl\Model\GirlModelService' => [
            'datagateway' => 'DataGateway\Mongo\NightClubGirl',
            'type' => 'Strapieno\NightClubGirl\Model\GirlModelService',
            'object' => 'NightClubGirl',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\NightClubGirl\Model\Criteria\GirlCollectionCriteria',
            'hydrator' => 'Strapieno\NightClubGirl\Model\Hydrator\GirlModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\NightClubGirl\Model\InputFilter\DefaultInputFilter' => [

        ]
    ]
];
