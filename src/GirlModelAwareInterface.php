<?php
namespace Strapieno\NightClubGirl\Model;

/**
 * Interface ReviewModelAwareInterface
 */
interface GirlModelAwareInterface
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