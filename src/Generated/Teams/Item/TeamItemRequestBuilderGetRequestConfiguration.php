<?php

namespace Microsoft\Graph\Generated\Teams\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamItemRequestBuilderGetRequestConfiguration 
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
     * @var TeamItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
