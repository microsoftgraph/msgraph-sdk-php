<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContentsWithExternalId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LearningContentsWithExternalIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LearningContentsWithExternalIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LearningContentsWithExternalIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new learningContentsWithExternalIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LearningContentsWithExternalIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LearningContentsWithExternalIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new learningContentsWithExternalIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LearningContentsWithExternalIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LearningContentsWithExternalIdRequestBuilderGetQueryParameters {
        return new LearningContentsWithExternalIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
