<?php

namespace Microsoft\Graph\Generated\Directory\AttributeSets\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttributeSetItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AttributeSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttributeSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AttributeSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttributeSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttributeSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AttributeSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttributeSetItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AttributeSetItemRequestBuilderGetQueryParameters {
        return new AttributeSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
