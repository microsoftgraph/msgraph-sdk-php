<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationIdentitySynchronization;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters {
        return new MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters($expand, $select);
    }

}
