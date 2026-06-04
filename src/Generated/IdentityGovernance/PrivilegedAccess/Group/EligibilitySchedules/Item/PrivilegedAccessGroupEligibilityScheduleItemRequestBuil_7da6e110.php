<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetRequestConfiguration
*/
class PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_7da6e110 extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730 $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_7da6e110 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730 {
        return new PrivilegedAccessGroupEligibilityScheduleItemRequestBuil_f9911730($expand, $select);
    }

}
