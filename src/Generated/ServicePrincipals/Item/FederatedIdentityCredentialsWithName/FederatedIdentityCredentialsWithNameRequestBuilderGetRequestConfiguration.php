<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\FederatedIdentityCredentialsWithName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FederatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FederatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters {
        return new FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
