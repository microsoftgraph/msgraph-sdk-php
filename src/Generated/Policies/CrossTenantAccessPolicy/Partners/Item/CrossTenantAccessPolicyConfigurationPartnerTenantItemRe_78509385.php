<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Partners\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetRequestConfiguration
*/
class CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_78509385 extends BaseRequestConfiguration 
{
    /**
     * @var CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967|null $queryParameters Request query parameters
    */
    public ?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967 $queryParameters = null;
    
    /**
     * Instantiates a new CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_78509385 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967 {
        return new CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_8b256967($expand, $select);
    }

}
