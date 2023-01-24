<?php

namespace Microsoft\Graph\Generated\Users\Item\Insights\Used;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsedRequestBuilderGetRequestConfiguration 
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
     * @var UsedRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsedRequestBuilderGetQueryParameters $queryParameters = null;
    
}
