<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\LastEstimateStatisticsOperation;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastEstimateStatisticsOperationRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var LastEstimateStatisticsOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastEstimateStatisticsOperationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new lastEstimateStatisticsOperationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastEstimateStatisticsOperationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LastEstimateStatisticsOperationRequestBuilderGetQueryParameters {
        return new LastEstimateStatisticsOperationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new lastEstimateStatisticsOperationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param LastEstimateStatisticsOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastEstimateStatisticsOperationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
