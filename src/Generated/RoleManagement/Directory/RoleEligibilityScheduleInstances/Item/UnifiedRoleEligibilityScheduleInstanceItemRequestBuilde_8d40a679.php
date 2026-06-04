<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleInstances\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_8d40a679 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_8d40a679 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90 {
        return new UnifiedRoleEligibilityScheduleInstanceItemRequestBuilde_bed9fc90($expand, $select);
    }

}
