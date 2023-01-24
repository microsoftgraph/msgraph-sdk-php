<?php

namespace Microsoft\Graph\Generated\Me\Planner\Tasks\Item\Details;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DetailsRequestBuilderGetRequestConfiguration 
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
     * @var DetailsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DetailsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
