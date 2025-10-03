<?php

namespace Microsoft\\Graph\\Generated\SchemaExtensions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SchemaExtensionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SchemaExtensionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SchemaExtensionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SchemaExtensionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SchemaExtensionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SchemaExtensionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SchemaExtensionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SchemaExtensionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SchemaExtensionItemRequestBuilderGetQueryParameters {
        return new SchemaExtensionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
