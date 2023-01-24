<?php

namespace Microsoft\Graph\Generated\Me\Todo;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TodoRequestBuilderGetRequestConfiguration 
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
     * @var TodoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TodoRequestBuilderGetQueryParameters $queryParameters = null;
    
}
