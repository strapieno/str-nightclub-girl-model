<?php
namespace Strapieno\NightClubGirl\Model\Validator;

use Strapieno\NightClubGirl\Model\GirlModelAwareInterface;
use Strapieno\NightClubGirl\Model\GirlModelAwareTrait;
use Strapieno\Utils\Validator\Model\AbstractEntityExist;
use Zend\Validator\ValidatorInterface;

/**
 * Class EntityExist
 */
class EntityExist extends AbstractEntityExist implements ValidatorInterface, GirlModelAwareInterface
{
    use GirlModelAwareTrait;

    const GETTER_METHOD_NAME = 'getNightClubGirlModelService';

    /**
     * @var array
     */
    protected $messageTemplates = [
        self::ID_NOT_EXISTS => 'The id does not exist',
        self::NOT_MONGO_ID  => 'Identifier format not valid'
    ];

    protected function getModelMethodService()
    {
        return EntityExist::GETTER_METHOD_NAME;
    }
}