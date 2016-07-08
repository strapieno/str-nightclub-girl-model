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
        // TODO add hydrator
        $this->selectionCriteria['nightclub_id'] = (string) $nightclubId;
        return $this;
    }
}