<?php

namespace Microsoft\Graph\Generated\Identity;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityRequestBuilderGetRequestConfiguration 
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
     * @var IdentityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityRequestBuilderGetQueryParameters $queryParameters = null;
    
}
