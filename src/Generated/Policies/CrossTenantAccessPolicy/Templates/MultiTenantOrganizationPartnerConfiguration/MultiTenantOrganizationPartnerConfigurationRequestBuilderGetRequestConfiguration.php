<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationPartnerConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MultiTenantOrganizationPartnerConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantOrganizationPartnerConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters {
        return new MultiTenantOrganizationPartnerConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
