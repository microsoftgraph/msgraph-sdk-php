<?php

namespace Microsoft\Graph\Generated\Places\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlaceItemRequestBuilderGetRequestConfiguration 
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
     * @var PlaceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlaceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
