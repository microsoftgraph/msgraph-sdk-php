<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PrivilegedAccessGroupEligibilityScheduleRequestItemRequestBuilderGetRequestConfiguration
*/
class PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_4b042468 extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752 $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_4b042468 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752 {
        return new PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ff463752($expand, $select);
    }

}
