<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Items\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BaseItemItemRequestBuilderGetRequestConfiguration 
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
     * @var BaseItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BaseItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
