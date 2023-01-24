<?php

namespace Microsoft\Graph\Generated\Groups\Item\GroupLifecyclePolicies\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupLifecyclePolicyItemRequestBuilderGetRequestConfiguration 
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
     * @var GroupLifecyclePolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupLifecyclePolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
