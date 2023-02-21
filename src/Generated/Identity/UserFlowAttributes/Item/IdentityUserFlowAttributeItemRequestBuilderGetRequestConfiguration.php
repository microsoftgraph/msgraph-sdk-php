<?php

namespace Microsoft\Graph\Generated\Identity\UserFlowAttributes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityUserFlowAttributeItemRequestBuilderGetRequestConfiguration 
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
     * @var IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters {
        return new IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new IdentityUserFlowAttributeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityUserFlowAttributeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
