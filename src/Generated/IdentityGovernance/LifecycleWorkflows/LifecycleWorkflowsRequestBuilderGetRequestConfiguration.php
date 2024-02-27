<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LifecycleWorkflowsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LifecycleWorkflowsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LifecycleWorkflowsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LifecycleWorkflowsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LifecycleWorkflowsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LifecycleWorkflowsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LifecycleWorkflowsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LifecycleWorkflowsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LifecycleWorkflowsRequestBuilderGetQueryParameters {
        return new LifecycleWorkflowsRequestBuilderGetQueryParameters($expand, $select);
    }

}
