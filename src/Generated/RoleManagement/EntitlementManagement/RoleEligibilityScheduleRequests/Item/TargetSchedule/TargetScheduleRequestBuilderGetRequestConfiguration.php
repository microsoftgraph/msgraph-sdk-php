<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\TargetSchedule;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TargetScheduleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TargetScheduleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TargetScheduleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new targetScheduleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TargetScheduleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TargetScheduleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new targetScheduleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TargetScheduleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TargetScheduleRequestBuilderGetQueryParameters {
        return new TargetScheduleRequestBuilderGetQueryParameters($expand, $select);
    }

}
