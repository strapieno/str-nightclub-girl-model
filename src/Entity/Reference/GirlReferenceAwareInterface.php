<?php
namespace Strapieno\NightClubGirl\Model\Entity\Reference;

/**
 * Interface GirlReferenceAwareInterface
 */
interface GirlReferenceAwareInterface
{
    /**
     * @return GirlReference
     */
    public function getGirlReference();

    /**
     * @param GirlReference $girlReference
     * @return $this
     */
    public function setGirlReference(GirlReference $girlReference);
}