<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var B2xIdentityUserFlowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?B2xIdentityUserFlowItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param B2xIdentityUserFlowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?B2xIdentityUserFlowItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new B2xIdentityUserFlowItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return B2xIdentityUserFlowItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): B2xIdentityUserFlowItemRequestBuilderGetQueryParameters {
        return new B2xIdentityUserFlowItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
