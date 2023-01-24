<?php

namespace Microsoft\Graph\Generated\Users\Item\Insights\Trending\Item\Resource;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceRequestBuilderGetRequestConfiguration 
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
     * @var ResourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceRequestBuilderGetQueryParameters $queryParameters = null;
    
}
