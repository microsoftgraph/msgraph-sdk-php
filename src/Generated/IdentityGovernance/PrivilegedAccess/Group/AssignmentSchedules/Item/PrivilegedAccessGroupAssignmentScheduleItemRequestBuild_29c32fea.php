<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PrivilegedAccessGroupAssignmentScheduleItemRequestBuilderGetRequestConfiguration
*/
class PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_29c32fea extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_29c32fea and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d {
        return new PrivilegedAccessGroupAssignmentScheduleItemRequestBuild_aeb2c76d($expand, $select);
    }

}
