<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Schedule\TimeOffRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TimeOffRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TimeOffRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TimeOffRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TimeOffRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TimeOffRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TimeOffRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TimeOffRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return TimeOffRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): TimeOffRequestItemRequestBuilderGetQueryParameters {
        return new TimeOffRequestItemRequestBuilderGetQueryParameters($select);
    }

}
