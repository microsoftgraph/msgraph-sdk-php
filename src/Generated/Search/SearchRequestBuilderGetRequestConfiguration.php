<?php

namespace Microsoft\Graph\Generated\Search;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SearchRequestBuilderGetRequestConfiguration 
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
     * @var SearchRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SearchRequestBuilderGetQueryParameters $queryParameters = null;
    
}
