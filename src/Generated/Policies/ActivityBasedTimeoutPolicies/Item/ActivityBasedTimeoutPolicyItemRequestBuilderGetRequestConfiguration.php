<?php

namespace Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
