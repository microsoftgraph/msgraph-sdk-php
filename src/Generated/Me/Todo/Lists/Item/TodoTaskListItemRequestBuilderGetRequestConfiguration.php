<?php

namespace Microsoft\Graph\Generated\Me\Todo\Lists\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TodoTaskListItemRequestBuilderGetRequestConfiguration 
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
     * @var TodoTaskListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TodoTaskListItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
