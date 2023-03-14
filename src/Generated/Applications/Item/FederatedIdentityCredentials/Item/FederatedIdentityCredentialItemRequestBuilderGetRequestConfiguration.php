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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var FederatedIdentityCredentialItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FederatedIdentityCredentialItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FederatedIdentityCredentialItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FederatedIdentityCredentialItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): FederatedIdentityCredentialItemRequestBuilderGetQueryParameters {
        return new FederatedIdentityCredentialItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new FederatedIdentityCredentialItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FederatedIdentityCredentialItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FederatedIdentityCredentialItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
