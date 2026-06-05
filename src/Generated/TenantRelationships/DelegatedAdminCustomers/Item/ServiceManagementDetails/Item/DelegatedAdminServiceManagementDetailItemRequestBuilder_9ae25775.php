<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminCustomers\Item\ServiceManagementDetails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DelegatedAdminServiceManagementDetailItemRequestBuilderGetRequestConfiguration
*/
class DelegatedAdminServiceManagementDetailItemRequestBuilder_9ae25775 extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21 $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminServiceManagementDetailItemRequestBuilder_9ae25775 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21 {
        return new DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21($expand, $select);
    }

}
