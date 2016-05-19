<?php
namespace Strapieno\NightClubGirl\Model;

/**
 * Class GirlModelAwareTrait
 */
trait GirlModelAwareTrait
{
    /**
     * @var null|GirlModelInterface
     */
    protected $nightClubGirlModelService;

    /**
     * @return null|GirlModelInterface
     */
    public function getNightClubGirlModelService()
    {
        return $this->nightClubGirlModelService;
    }

    /**
     * @param GirlModelInterface $nightClubGirlModelService
     * @return $this
     */
    public function setNightClubGirlModelService(GirlModelInterface $nightClubGirlModelService)
    {
        $this->nightClubGirlModelService = $nightClubGirlModelService;
        return $this;
    }
}