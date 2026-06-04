<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminCustomers\Item\ServiceManagementDetails\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Contains the management details of a service in the customer tenant that's managed by delegated administration. Original name: DelegatedAdminServiceManagementDetailItemRequestBuilderGetQueryParameters
*/
class DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new DelegatedAdminServiceManagementDetailItemRequestBuilder_6d5bee21 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
