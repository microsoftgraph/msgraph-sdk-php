<?php

namespace Microsoft\Graph\Generated\Connections\Item\Groups\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalGroupItemRequestBuilderGetRequestConfiguration 
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
     * @var ExternalGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
