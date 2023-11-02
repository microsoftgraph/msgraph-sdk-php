<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Schedule\TimeOffReasons\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TimeOffReasonItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TimeOffReasonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TimeOffReasonItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TimeOffReasonItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TimeOffReasonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TimeOffReasonItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TimeOffReasonItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return TimeOffReasonItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): TimeOffReasonItemRequestBuilderGetQueryParameters {
        return new TimeOffReasonItemRequestBuilderGetQueryParameters($select);
    }

}
