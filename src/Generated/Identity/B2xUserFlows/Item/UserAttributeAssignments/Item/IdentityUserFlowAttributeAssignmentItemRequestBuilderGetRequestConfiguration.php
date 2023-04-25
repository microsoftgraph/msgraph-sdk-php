<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityUserFlowAttributeAssignmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityUserFlowAttributeAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters {
        return new IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
