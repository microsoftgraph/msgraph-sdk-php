<?php

namespace Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FederatedIdentityCredentialsRequestBuilderGetRequestConfiguration 
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
     * @var FederatedIdentityCredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FederatedIdentityCredentialsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
