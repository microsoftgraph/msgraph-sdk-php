<?php

namespace Microsoft\Graph\Generated\TenantRelationships\MultiTenantOrganization\Tenants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MultiTenantOrganizationMemberItemRequestBuilderGetRequestConfiguration
*/
class MultiTenantOrganizationMemberItemRequestBuilderGetReque_406d0ba2 extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3|null $queryParameters Request query parameters
    */
    public ?MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3 $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantOrganizationMemberItemRequestBuilderGetReque_406d0ba2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3 {
        return new MultiTenantOrganizationMemberItemRequestBuilderGetQuery_c5e923e3($expand, $select);
    }

}
