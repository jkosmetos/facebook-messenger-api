<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/01/27
 * Time: 12:04 AM
 */

namespace JK\FacebookMessenger\Core\Attachment;

use JK\FacebookMessenger\Core\Attachment;

/**
 * Class FileAttachment
 * @package JK\FacebookMessenger\Core\Attachment
 */
class FileAttachment extends Attachment
{
    /**
     * FileAttachment constructor.
     * @param null $payload
     */
    public function __construct($payload = null)
    {
        // Invoke parent constructor and force type value
        parent::__construct(Attachment::TYPE_VIDEO, $payload);
    }
}