<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: IdentityUserFlowAttributeAssignmentItemRequestBuilderGetRequestConfiguration
*/
class IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_36894d78 extends BaseRequestConfiguration 
{
    /**
     * @var IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188|null $queryParameters Request query parameters
    */
    public ?IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188 $queryParameters = null;
    
    /**
     * Instantiates a new IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_36894d78 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188 {
        return new IdentityUserFlowAttributeAssignmentItemRequestBuilderGe_67a1e188($expand, $select);
    }

}
