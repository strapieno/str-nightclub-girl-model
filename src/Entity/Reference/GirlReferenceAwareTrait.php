<?php
namespace Strapieno\NightClubGirl\Model\Entity\Reference;

/**
 * Class GirlReferenceAwareTrait
 */
trait GirlReferenceAwareTrait
{
    /**
     * @var GirlReference|null
     */
    protected $girlReference;

    /**
     * @return GirlReference
     */
    public function getGirlReference()
    {
        return $this->girlReference;
    }

    /**
     * @param GirlReference $girlReference
     * @return $this
     */
    public function setGirlReference(GirlReference $girlReference)
    {
        $this->girlReference = $girlReference;
        return $this;
    }
}