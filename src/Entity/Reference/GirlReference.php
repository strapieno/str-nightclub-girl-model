<?php
namespace Strapieno\NightClubGirl\Model\Entity\Reference;

use Matryoshka\Model\Object\AbstractObject;
use Strapieno\NightClubGirl\Model\GirlModelService;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class GirlReference
 */
class GirlReference extends AbstractObject implements ObjectInterface, EntityReferenceInterface
{
    use EntityReferenceTrait;

    /**
     * @return String
     */
    public function getServiceName()
    {
        return GirlModelService::class;
    }
}