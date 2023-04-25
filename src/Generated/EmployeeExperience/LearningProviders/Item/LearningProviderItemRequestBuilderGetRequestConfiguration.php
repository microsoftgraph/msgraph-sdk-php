<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LearningProviderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LearningProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LearningProviderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LearningProviderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LearningProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LearningProviderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LearningProviderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LearningProviderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LearningProviderItemRequestBuilderGetQueryParameters {
        return new LearningProviderItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
