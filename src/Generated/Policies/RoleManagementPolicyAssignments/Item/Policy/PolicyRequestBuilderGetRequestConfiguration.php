<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicyAssignments\Item\Policy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new policyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new policyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PolicyRequestBuilderGetQueryParameters {
        return new PolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
