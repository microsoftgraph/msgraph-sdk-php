<?php

namespace Microsoft\Graph\Generated\Groups\Item\Planner\Plans;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlansRequestBuilderGetRequestConfiguration 
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
     * @var PlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlansRequestBuilderGetQueryParameters $queryParameters = null;
    
}
