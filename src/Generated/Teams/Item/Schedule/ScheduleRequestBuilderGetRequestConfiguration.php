<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScheduleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ScheduleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScheduleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ScheduleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ScheduleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScheduleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ScheduleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ScheduleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ScheduleRequestBuilderGetQueryParameters {
        return new ScheduleRequestBuilderGetQueryParameters($expand, $select);
    }

}
