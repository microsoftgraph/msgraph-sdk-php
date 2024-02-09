<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualEventsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VirtualEventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualEventsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VirtualEventsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualEventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEventsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VirtualEventsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEventsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualEventsRequestBuilderGetQueryParameters {
        return new VirtualEventsRequestBuilderGetQueryParameters($expand, $select);
    }

}
