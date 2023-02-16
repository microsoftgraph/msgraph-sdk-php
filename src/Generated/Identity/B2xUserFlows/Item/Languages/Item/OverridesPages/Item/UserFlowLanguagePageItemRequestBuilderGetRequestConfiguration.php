<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\OverridesPages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserFlowLanguagePageItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var UserFlowLanguagePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserFlowLanguagePageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserFlowLanguagePageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserFlowLanguagePageItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): UserFlowLanguagePageItemRequestBuilderGetQueryParameters {
        return new UserFlowLanguagePageItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new UserFlowLanguagePageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UserFlowLanguagePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserFlowLanguagePageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
