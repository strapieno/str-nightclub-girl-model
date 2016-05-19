<?php
namespace Strapieno\NightClubGirl\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReferenceAwareInterface;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReferenceAwareTrait;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareTrait;
use Strapieno\Utils\Model\Object\Girl\GirlInterface;
use Strapieno\Utils\Model\Object\Girl\GirlTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class GirlEntity
 */
class GirlEntity extends AbstractActiveRecord implements EntityInterface,
    GirlInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    AggregateRatingAwareInterface,
    NightClubReferenceAwareInterface
{
    use NightClubReferenceAwareTrait;
    use DateHistoryAwareTrait;
    use AggregateRatingAwareTrait;
    use GirlTrait;
}