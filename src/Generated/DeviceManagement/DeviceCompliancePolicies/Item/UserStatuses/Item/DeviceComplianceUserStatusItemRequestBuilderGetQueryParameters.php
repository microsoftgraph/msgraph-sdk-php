<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of DeviceComplianceUserStatus.
*/
class DeviceComplianceUserStatusItemRequestBuilderGetQueryParameters 
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
