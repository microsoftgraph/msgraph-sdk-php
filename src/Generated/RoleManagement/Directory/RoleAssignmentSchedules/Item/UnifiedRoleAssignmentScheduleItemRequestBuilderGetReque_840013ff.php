<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentSchedules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleAssignmentScheduleItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleAssignmentScheduleItemRequestBuilderGetReque_840013ff extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleItemRequestBuilderGetReque_840013ff and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23 {
        return new UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23($expand, $select);
    }

}
