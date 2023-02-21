<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Analytics;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AnalyticsRequestBuilderGetRequestConfiguration 
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
     * @var AnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AnalyticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new analyticsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AnalyticsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AnalyticsRequestBuilderGetQueryParameters {
        return new AnalyticsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new analyticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AnalyticsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
