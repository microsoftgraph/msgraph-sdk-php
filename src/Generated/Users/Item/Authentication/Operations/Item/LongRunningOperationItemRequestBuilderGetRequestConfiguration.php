<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\Operations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LongRunningOperationItemRequestBuilderGetRequestConfiguration 
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
     * @var LongRunningOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LongRunningOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
