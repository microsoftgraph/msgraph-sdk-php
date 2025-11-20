<?php

namespace Microsoft\Graph\Generated\Security\Identities\SensorCandidates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SensorCandidateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SensorCandidateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SensorCandidateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SensorCandidateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SensorCandidateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SensorCandidateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SensorCandidateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SensorCandidateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SensorCandidateItemRequestBuilderGetQueryParameters {
        return new SensorCandidateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
