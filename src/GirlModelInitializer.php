<?php
namespace Strapieno\NightClubGirl\Model;

use Strapieno\Utils\Inizilizer\AbstractModelServiceInizilizer;

/**
 * Class GirlModelInitializer
 */
class GirlModelInitializer extends AbstractModelServiceInizilizer
{
    const SERVICE_NAME = GirlModelService::class;
    const INSTANCE_CLASS = GirlModelInterface::class;
    const SETTER_METHOD = 'setNightClubGirlModelService';
}