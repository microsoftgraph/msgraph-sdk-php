<?php

namespace Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarPermissions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the specified permissions object of a user or group calendar that has been shared. This API is available in the following national cloud deployments.
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
