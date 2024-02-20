<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\Analytics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AnalyticsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AnalyticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AnalyticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AnalyticsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AnalyticsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AnalyticsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AnalyticsRequestBuilderGetQueryParameters {
        return new AnalyticsRequestBuilderGetQueryParameters($expand, $select);
    }

}
