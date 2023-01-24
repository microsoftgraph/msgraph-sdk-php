<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PhoneMethods;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PhoneMethodsRequestBuilderGetRequestConfiguration 
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
     * @var PhoneMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PhoneMethodsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
