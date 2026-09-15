<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\GovernanceRelationships\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernanceRelationshipItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GovernanceRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernanceRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GovernanceRelationshipItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernanceRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernanceRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernanceRelationshipItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernanceRelationshipItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernanceRelationshipItemRequestBuilderGetQueryParameters {
        return new GovernanceRelationshipItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
