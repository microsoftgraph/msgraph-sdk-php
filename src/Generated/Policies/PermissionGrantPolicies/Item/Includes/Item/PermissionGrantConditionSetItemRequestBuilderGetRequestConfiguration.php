<?php

namespace Microsoft\\Graph\\Generated\Policies\PermissionGrantPolicies\Item\Includes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionGrantConditionSetItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PermissionGrantConditionSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionGrantConditionSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PermissionGrantConditionSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionGrantConditionSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionGrantConditionSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PermissionGrantConditionSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PermissionGrantConditionSetItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PermissionGrantConditionSetItemRequestBuilderGetQueryParameters {
        return new PermissionGrantConditionSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
