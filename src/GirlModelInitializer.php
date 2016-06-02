<?php
namespace Strapieno\NightClubGirl\Model;

use Strapieno\Utils\Initializer\AbstractModelServiceInitializer;

/**
 * Class GirlModelInitializer
 */
class GirlModelInitializer extends AbstractModelServiceInitializer
{
    const SERVICE_NAME = GirlModelService::class;
    const INSTANCE_CLASS = GirlModelInterface::class;
    const SETTER_METHOD = 'setNightClubGirlModelService';
}