<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\FederatedIdentityCredentials\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FederatedIdentityCredentialItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FederatedIdentityCredentialItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FederatedIdentityCredentialItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FederatedIdentityCredentialItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FederatedIdentityCredentialItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FederatedIdentityCredentialItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FederatedIdentityCredentialItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FederatedIdentityCredentialItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FederatedIdentityCredentialItemRequestBuilderGetQueryParameters {
        return new FederatedIdentityCredentialItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
