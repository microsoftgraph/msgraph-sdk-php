<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item\Calendars\Item\CalendarPermissions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the specified permissions object of a user or group calendar that has been shared. This API is supported in the following national cloud deployments.
*/
class CalendarPermissionItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CalendarPermissionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
