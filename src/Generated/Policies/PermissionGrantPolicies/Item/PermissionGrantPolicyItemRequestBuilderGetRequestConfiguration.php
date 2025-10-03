<?php

namespace Microsoft\\Graph\\Generated\Policies\PermissionGrantPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionGrantPolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PermissionGrantPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionGrantPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PermissionGrantPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionGrantPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionGrantPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PermissionGrantPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PermissionGrantPolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PermissionGrantPolicyItemRequestBuilderGetQueryParameters {
        return new PermissionGrantPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
