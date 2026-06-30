<?php

namespace Microsoft\Graph\Generated\Policies\FederatedTokenValidationPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: federatedTokenValidationPolicyRequestBuilderGetRequestConfiguration
*/
class FederatedTokenValidationPolicyRequestBuilderGetRequestC_39298105 extends BaseRequestConfiguration 
{
    /**
     * @var FederatedTokenValidationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FederatedTokenValidationPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FederatedTokenValidationPolicyRequestBuilderGetRequestC_39298105 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FederatedTokenValidationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FederatedTokenValidationPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FederatedTokenValidationPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FederatedTokenValidationPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FederatedTokenValidationPolicyRequestBuilderGetQueryParameters {
        return new FederatedTokenValidationPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
