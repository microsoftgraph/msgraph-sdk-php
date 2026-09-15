<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RelatedTenantItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RelatedTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RelatedTenantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RelatedTenantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RelatedTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RelatedTenantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RelatedTenantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RelatedTenantItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RelatedTenantItemRequestBuilderGetQueryParameters {
        return new RelatedTenantItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
