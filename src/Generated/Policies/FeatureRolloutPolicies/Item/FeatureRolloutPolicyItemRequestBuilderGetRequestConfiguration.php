<?php

namespace Microsoft\\Graph\\Generated\Policies\FeatureRolloutPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FeatureRolloutPolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FeatureRolloutPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FeatureRolloutPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FeatureRolloutPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FeatureRolloutPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FeatureRolloutPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FeatureRolloutPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FeatureRolloutPolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FeatureRolloutPolicyItemRequestBuilderGetQueryParameters {
        return new FeatureRolloutPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
