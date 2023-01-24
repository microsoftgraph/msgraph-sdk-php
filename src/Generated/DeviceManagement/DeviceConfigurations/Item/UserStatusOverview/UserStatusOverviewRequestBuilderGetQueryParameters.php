<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatusOverview;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Device Configuration users status overview
*/
class UserStatusOverviewRequestBuilderGetQueryParameters 
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
