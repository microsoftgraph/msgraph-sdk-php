<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_d8bb4796 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_d8bb4796 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc {
        return new UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder_e31a12dc($expand, $select);
    }

}
