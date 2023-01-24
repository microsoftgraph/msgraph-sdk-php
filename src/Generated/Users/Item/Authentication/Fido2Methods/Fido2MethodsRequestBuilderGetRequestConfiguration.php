<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\Fido2Methods;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Fido2MethodsRequestBuilderGetRequestConfiguration 
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
     * @var Fido2MethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Fido2MethodsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
