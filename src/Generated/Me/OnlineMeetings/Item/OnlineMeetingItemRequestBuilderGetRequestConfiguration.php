<?php

namespace Microsoft\Graph\Generated\Me\OnlineMeetings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnlineMeetingItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnlineMeetingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnlineMeetingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnlineMeetingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnlineMeetingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnlineMeetingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnlineMeetingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnlineMeetingItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnlineMeetingItemRequestBuilderGetQueryParameters {
        return new OnlineMeetingItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
