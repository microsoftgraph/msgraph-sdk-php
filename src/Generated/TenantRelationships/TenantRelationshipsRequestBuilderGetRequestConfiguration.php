<?php

namespace Microsoft\\Graph\\Generated\TenantRelationships;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantRelationshipsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TenantRelationshipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantRelationshipsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TenantRelationshipsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantRelationshipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantRelationshipsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TenantRelationshipsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantRelationshipsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TenantRelationshipsRequestBuilderGetQueryParameters {
        return new TenantRelationshipsRequestBuilderGetQueryParameters($expand, $select);
    }

}
