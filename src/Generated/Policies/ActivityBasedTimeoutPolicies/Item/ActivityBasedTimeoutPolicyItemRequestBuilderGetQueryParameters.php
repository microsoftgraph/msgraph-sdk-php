<?php

namespace Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policy that controls the idle time out for web sessions for applications.
*/
class ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters 
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
