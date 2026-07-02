<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationPartnerConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: multiTenantOrganizationPartnerConfigurationRequestBuilderGetRequestConfiguration
*/
class MultiTenantOrganizationPartnerConfigurationRequestBuild_5e37cf32 extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31|null $queryParameters Request query parameters
    */
    public ?MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31 $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantOrganizationPartnerConfigurationRequestBuild_5e37cf32 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31 {
        return new MultiTenantOrganizationPartnerConfigurationRequestBuild_0d9dbc31($expand, $select);
    }

}
