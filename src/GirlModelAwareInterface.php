<?php
namespace Strapieno\NightClubGirl\Model\Hydrator\Mongo;

/**
 * Interface ReviewModelAwareInterface
 */
interface ReviewModelAwareInterface
{
    /**
     * @return null|GirlModelInterface
     */
    public function getNightClubGirlModelService();

    /**
     * @param GirlModelInterface $nightClubGirlModelService
     * @return $this
     */
    public function setNightClubGirlModelService(GirlModelInterface $nightClubGirlModelService);
}