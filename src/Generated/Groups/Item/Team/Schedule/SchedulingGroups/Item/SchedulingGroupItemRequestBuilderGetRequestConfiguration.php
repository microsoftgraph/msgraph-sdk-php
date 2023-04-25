<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Schedule\SchedulingGroups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SchedulingGroupItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SchedulingGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SchedulingGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SchedulingGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SchedulingGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SchedulingGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SchedulingGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return SchedulingGroupItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): SchedulingGroupItemRequestBuilderGetQueryParameters {
        return new SchedulingGroupItemRequestBuilderGetQueryParameters($select);
    }

}
