<?php

namespace Microsoft\Graph\Generated\TenantRelationships\MultiTenantOrganization;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MultiTenantOrganizationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantOrganizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MultiTenantOrganizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantOrganizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantOrganizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantOrganizationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantOrganizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantOrganizationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantOrganizationRequestBuilderGetQueryParameters {
        return new MultiTenantOrganizationRequestBuilderGetQueryParameters($expand, $select);
    }

}
