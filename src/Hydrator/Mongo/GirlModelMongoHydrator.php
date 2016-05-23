<?php
namespace Strapieno\NightClubGirl\Model\Hydrator\Mongo;

use Matryoshka\Model\Hydrator\Strategy\HasOneStrategy;
use Matryoshka\Model\Hydrator\Strategy\SetTypeStrategy;
use Strapieno\NightClub\Model\Entity\Object\AggregateRatingObject;
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
        // Property strategy
        $this->addStrategy(
            'night_club_reference',
            new HasOneStrategy(new NightClubReference(), false)
        );

        $aggregateRating = new AggregateRatingObject();
        $aggregateRating->getHydrator()->addStrategy('partial', new SetTypeStrategy('array', 'array'));
        $this->addStrategy(
            'aggregate_rating',
            new HasOneStrategy($aggregateRating, false)
        );
    }
}