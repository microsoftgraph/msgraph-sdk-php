<?php

namespace Microsoft\Graph\Generated\TenantRelationships;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantRelationshipsRequestBuilderGetRequestConfiguration 
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
     * @var TenantRelationshipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantRelationshipsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new tenantRelationshipsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantRelationshipsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TenantRelationshipsRequestBuilderGetQueryParameters {
        return new TenantRelationshipsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new tenantRelationshipsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TenantRelationshipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantRelationshipsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
