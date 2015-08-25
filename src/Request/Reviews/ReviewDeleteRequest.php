<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\Reviews;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractDeleteRequest;
use Commercetools\Core\Model\Review\Review;
use Commercetools\Core\Response\ApiResponseInterface;

/**
 * @package Commercetools\Core\Request\Reviews
 * @method Review mapResponse(ApiResponseInterface $response)
 */
class ReviewDeleteRequest extends AbstractDeleteRequest
{
    protected $resultClass = '\Commercetools\Core\Model\Review\Review';

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     */
    public function __construct($id, $version, Context $context = null)
    {
        parent::__construct(ReviewsEndpoint::endpoint(), $id, $version, $context);
    }

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     * @return static
     */
    public static function ofIdAndVersion($id, $version, Context $context = null)
    {
        return new static($id, $version, $context);
    }
}