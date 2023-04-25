<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LearningContentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LearningContentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LearningContentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LearningContentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LearningContentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LearningContentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LearningContentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LearningContentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LearningContentItemRequestBuilderGetQueryParameters {
        return new LearningContentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
