<?php

namespace Microsoft\Graph\Generated\External\Connections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalConnectionItemRequestBuilderGetRequestConfiguration 
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
     * @var ExternalConnectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalConnectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
