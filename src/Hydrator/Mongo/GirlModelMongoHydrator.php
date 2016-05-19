<?php
namespace Strapieno\NightClubGirl\Model\Hydrator\Mongo;

use Matryoshka\Model\Hydrator\Strategy\HasOneStrategy;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReference;
use Strapieno\Utils\Hydrator\Mongo\DateHistoryHydrator;

/**
 * Class GirlModelMongoHydrator
 */
class GirlModelMongoHydrator extends DateHistoryHydrator
{
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);

        $this->addStrategy(
            'night_club_reference',
            new HasOneStrategy(new NightClubReference(), false)
        );

    }
}