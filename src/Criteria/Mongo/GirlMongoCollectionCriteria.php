<?php
namespace Strapieno\NightClubGirl\Model\Criteria\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Criteria\FindAllCriteria;

/**
 * Class GirlMongoCollectionCriteria
 */
class GirlMongoCollectionCriteria extends FindAllCriteria
{
    /***
     * @param $nightclubId
     * @return $this
     */
    public function setNightclubId($nightclubId)
    {
        // FIXME id to mongoid?
        $this->selectionCriteria['night_club_reference.id'] = (string) $nightclubId;
        return $this;
    }
}