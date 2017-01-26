<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/01/27
 * Time: 12:02 AM
 */

namespace JK\FacebookMessenger\Core\Attachment;

use JK\FacebookMessenger\Core\Attachment;

/**
 * Class VideoAttachment
 * @package JK\FacebookMessenger\Core\Attachment
 */
class VideoAttachment extends Attachment
{
    /**
     * VideoAttachment constructor.
     * @param null $payload
     */
    public function __construct($payload = null)
    {
        // Invoke parent constructor and force type value
        parent::__construct(Attachment::TYPE_VIDEO, $payload);
    }
}