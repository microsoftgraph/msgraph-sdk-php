<?php

namespace Microsoft\Graph\Generated\Users\Item\Solutions\WorkingTimeSchedule;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkingTimeScheduleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkingTimeScheduleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkingTimeScheduleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkingTimeScheduleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkingTimeScheduleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkingTimeScheduleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkingTimeScheduleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkingTimeScheduleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorkingTimeScheduleRequestBuilderGetQueryParameters {
        return new WorkingTimeScheduleRequestBuilderGetQueryParameters($expand, $select);
    }

}
