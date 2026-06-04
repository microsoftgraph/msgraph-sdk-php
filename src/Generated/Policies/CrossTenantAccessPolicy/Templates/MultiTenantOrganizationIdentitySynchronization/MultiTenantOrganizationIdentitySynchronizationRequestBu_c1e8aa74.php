<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationIdentitySynchronization;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: multiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration
*/
class MultiTenantOrganizationIdentitySynchronizationRequestBu_c1e8aa74 extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72|null $queryParameters Request query parameters
    */
    public ?MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72 $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantOrganizationIdentitySynchronizationRequestBu_c1e8aa74 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72 {
        return new MultiTenantOrganizationIdentitySynchronizationRequestBu_483f6c72($expand, $select);
    }

}
