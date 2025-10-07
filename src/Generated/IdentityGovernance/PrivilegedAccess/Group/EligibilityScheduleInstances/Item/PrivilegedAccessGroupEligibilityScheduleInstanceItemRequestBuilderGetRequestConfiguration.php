<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters {
        return new PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
