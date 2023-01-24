<?php

namespace Microsoft\Graph\Generated\Users\Item\Insights\Trending;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TrendingRequestBuilderGetRequestConfiguration 
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
     * @var TrendingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TrendingRequestBuilderGetQueryParameters $queryParameters = null;
    
}
