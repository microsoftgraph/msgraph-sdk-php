<?php

namespace Microsoft\\Graph\\Generated\Directory\CustomSecurityAttributeDefinitions\Item\AllowedValues\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllowedValueItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllowedValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllowedValueItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllowedValueItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllowedValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllowedValueItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllowedValueItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AllowedValueItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AllowedValueItemRequestBuilderGetQueryParameters {
        return new AllowedValueItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
