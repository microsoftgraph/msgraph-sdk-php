<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Tracing\MessageTraces\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExchangeMessageTraceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExchangeMessageTraceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExchangeMessageTraceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExchangeMessageTraceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExchangeMessageTraceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExchangeMessageTraceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExchangeMessageTraceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExchangeMessageTraceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExchangeMessageTraceItemRequestBuilderGetQueryParameters {
        return new ExchangeMessageTraceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
