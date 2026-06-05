<?php

namespace Microsoft\Graph\Generated\Functions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AttributeMappingFunctionSchemaItemRequestBuilderGetRequestConfiguration
*/
class AttributeMappingFunctionSchemaItemRequestBuilderGetRequ_deb8d23a extends BaseRequestConfiguration 
{
    /**
     * @var AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62|null $queryParameters Request query parameters
    */
    public ?AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62 $queryParameters = null;
    
    /**
     * Instantiates a new AttributeMappingFunctionSchemaItemRequestBuilderGetRequ_deb8d23a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62 {
        return new AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62($expand, $select);
    }

}
