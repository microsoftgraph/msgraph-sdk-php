<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\EmailMethods\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmailAuthenticationMethodItemRequestBuilderGetRequestConfiguration 
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
     * @var EmailAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmailAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
