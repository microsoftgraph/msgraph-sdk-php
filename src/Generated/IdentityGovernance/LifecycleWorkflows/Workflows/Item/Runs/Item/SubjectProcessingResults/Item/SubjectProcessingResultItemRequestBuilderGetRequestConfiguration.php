<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\Runs\Item\SubjectProcessingResults\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubjectProcessingResultItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubjectProcessingResultItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubjectProcessingResultItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubjectProcessingResultItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubjectProcessingResultItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubjectProcessingResultItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubjectProcessingResultItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubjectProcessingResultItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubjectProcessingResultItemRequestBuilderGetQueryParameters {
        return new SubjectProcessingResultItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
