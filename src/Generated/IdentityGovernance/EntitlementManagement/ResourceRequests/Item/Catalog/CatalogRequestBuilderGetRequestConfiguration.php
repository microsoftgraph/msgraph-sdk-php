<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Catalog;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CatalogRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CatalogRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CatalogRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new catalogRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CatalogRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CatalogRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new catalogRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CatalogRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CatalogRequestBuilderGetQueryParameters {
        return new CatalogRequestBuilderGetQueryParameters($expand, $select);
    }

}
