<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\FederatedIdentityCredentialsWithName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: federatedIdentityCredentialsWithNameRequestBuilderGetRequestConfiguration
*/
class FederatedIdentityCredentialsWithNameRequestBuilderGetRe_cda5e15a extends BaseRequestConfiguration 
{
    /**
     * @var FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6|null $queryParameters Request query parameters
    */
    public ?FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6 $queryParameters = null;
    
    /**
     * Instantiates a new FederatedIdentityCredentialsWithNameRequestBuilderGetRe_cda5e15a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6 {
        return new FederatedIdentityCredentialsWithNameRequestBuilderGetQu_59cb17c6($expand, $select);
    }

}
