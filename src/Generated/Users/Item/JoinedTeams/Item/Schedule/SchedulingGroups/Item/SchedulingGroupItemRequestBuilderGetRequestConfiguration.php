<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\SchedulingGroups\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SchedulingGroupItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var SchedulingGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SchedulingGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SchedulingGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return SchedulingGroupItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): SchedulingGroupItemRequestBuilderGetQueryParameters {
        return new SchedulingGroupItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new SchedulingGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SchedulingGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SchedulingGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
