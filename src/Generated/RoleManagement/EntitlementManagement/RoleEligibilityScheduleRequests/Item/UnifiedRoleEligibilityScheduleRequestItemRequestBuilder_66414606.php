<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleEligibilityScheduleRequestItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_66414606 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_66414606 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182 {
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_02abb182($expand, $select);
    }

}
