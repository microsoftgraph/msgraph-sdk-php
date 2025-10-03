<?php

namespace Microsoft\\Graph\\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationIdentitySynchronization;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the cross-tenant access policy template with user synchronization settings for a multitenant organization.
*/
class MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters 
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
     * Instantiates a new MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
