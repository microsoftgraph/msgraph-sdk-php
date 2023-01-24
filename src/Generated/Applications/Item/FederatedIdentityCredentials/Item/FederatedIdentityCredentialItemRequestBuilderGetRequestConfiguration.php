<?php

namespace Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FederatedIdentityCredentialItemRequestBuilderGetRequestConfiguration 
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
     * @var FederatedIdentityCredentialItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FederatedIdentityCredentialItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
