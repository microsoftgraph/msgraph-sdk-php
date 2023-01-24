<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\Item\IntendedPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Zero or more policies admin intended for the app as of now.
*/
class ManagedAppPolicyItemRequestBuilderGetQueryParameters 
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
