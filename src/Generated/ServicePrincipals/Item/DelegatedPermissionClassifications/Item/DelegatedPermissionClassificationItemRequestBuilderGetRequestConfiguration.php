<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DelegatedPermissionClassificationItemRequestBuilderGetRequestConfiguration 
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
     * @var DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters {
        return new DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DelegatedPermissionClassificationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
