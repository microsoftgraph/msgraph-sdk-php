<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration
*/
class PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_7658d955 extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_7658d955 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab {
        return new PrivilegedAccessGroupEligibilityScheduleInstanceItemReq_22e217ab($expand, $select);
    }

}
