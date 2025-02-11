<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Schedule\TimeCards\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TimeCardItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TimeCardItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TimeCardItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TimeCardItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TimeCardItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TimeCardItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TimeCardItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TimeCardItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TimeCardItemRequestBuilderGetQueryParameters {
        return new TimeCardItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
