<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkflowItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkflowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkflowItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkflowItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkflowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkflowItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkflowItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkflowItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorkflowItemRequestBuilderGetQueryParameters {
        return new WorkflowItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
