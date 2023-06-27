<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\Versions\Item\Tasks\Item\TaskProcessingResults\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TaskProcessingResultItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TaskProcessingResultItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TaskProcessingResultItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TaskProcessingResultItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TaskProcessingResultItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TaskProcessingResultItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TaskProcessingResultItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TaskProcessingResultItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TaskProcessingResultItemRequestBuilderGetQueryParameters {
        return new TaskProcessingResultItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
