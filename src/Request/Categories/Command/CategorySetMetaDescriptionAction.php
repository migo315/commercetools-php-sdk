<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\Categories\Command;

use Sphere\Core\Model\Common\LocalizedString;
use Sphere\Core\Request\AbstractAction;

/**
 * Class CategorySetMetaDescriptionAction
 * @package Sphere\Core\Request\Categories\Command
 * @link http://dev.sphere.io/http-api-projects-categories.html#set-meta-description
 * @method string getAction()
 * @method CategorySetMetaDescriptionAction setAction(string $action = null)
 * @method LocalizedString getMetaDescription()
 * @method CategorySetMetaDescriptionAction setMetaDescription(LocalizedString $metaDescription = null)
 */
class CategorySetMetaDescriptionAction extends AbstractAction
{
    public function getFields()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'metaDescription' => [static::TYPE => '\Sphere\Core\Model\Common\LocalizedString'],
        ];
    }

    /**
     *
     */
    public function __construct()
    {
        $this->setAction('setMetaDescription');
    }
}