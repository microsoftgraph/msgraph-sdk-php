<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleAssignmentScheduleRequestItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_1ba63ab1 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_1ba63ab1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa {
        return new UnifiedRoleAssignmentScheduleRequestItemRequestBuilderG_b650aaaa($expand, $select);
    }

}
