<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PrivilegedAccessGroupAssignmentScheduleRequestItemRequestBuilderGetRequestConfiguration
*/
class PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d226b149 extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d226b149 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db {
        return new PrivilegedAccessGroupAssignmentScheduleRequestItemReque_32c949db($expand, $select);
    }

}
