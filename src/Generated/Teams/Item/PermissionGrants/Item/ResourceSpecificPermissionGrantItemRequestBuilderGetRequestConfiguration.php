<?php

namespace Microsoft\Graph\Generated\Teams\Item\PermissionGrants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceSpecificPermissionGrantItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResourceSpecificPermissionGrantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters {
        return new ResourceSpecificPermissionGrantItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
