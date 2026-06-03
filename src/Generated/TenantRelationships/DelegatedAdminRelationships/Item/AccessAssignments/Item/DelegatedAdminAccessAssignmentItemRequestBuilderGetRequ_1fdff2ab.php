<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\AccessAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DelegatedAdminAccessAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DelegatedAdminAccessAssignmentItemRequestBuilderGetRequ_1fdff2ab extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126 $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminAccessAssignmentItemRequestBuilderGetRequ_1fdff2ab and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126 {
        return new DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126($expand, $select);
    }

}
