<?php

namespace Microsoft\\Graph\\Generated\Applications\Item\HomeRealmDiscoveryPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HomeRealmDiscoveryPolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HomeRealmDiscoveryPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters {
        return new HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
