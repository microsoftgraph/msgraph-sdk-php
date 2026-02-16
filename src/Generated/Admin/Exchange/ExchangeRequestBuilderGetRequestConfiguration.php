<?php

namespace Microsoft\Graph\Generated\Admin\Exchange;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExchangeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExchangeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExchangeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExchangeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExchangeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExchangeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExchangeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExchangeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExchangeRequestBuilderGetQueryParameters {
        return new ExchangeRequestBuilderGetQueryParameters($expand, $select);
    }

}
