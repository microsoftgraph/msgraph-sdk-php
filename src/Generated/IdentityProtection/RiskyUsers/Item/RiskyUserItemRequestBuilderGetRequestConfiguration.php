<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskyUserItemRequestBuilderGetRequestConfiguration 
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
     * @var RiskyUserItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskyUserItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
