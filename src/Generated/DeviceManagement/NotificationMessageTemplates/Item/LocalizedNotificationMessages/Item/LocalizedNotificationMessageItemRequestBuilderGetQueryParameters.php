<?php

namespace Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates\Item\LocalizedNotificationMessages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of localized messages for this Notification Message Template.
*/
class LocalizedNotificationMessageItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
