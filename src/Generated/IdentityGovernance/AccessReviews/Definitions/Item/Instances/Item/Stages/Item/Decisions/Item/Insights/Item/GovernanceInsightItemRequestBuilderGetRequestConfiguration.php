<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Stages\Item\Decisions\Item\Insights\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernanceInsightItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GovernanceInsightItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernanceInsightItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GovernanceInsightItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernanceInsightItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernanceInsightItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernanceInsightItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernanceInsightItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernanceInsightItemRequestBuilderGetQueryParameters {
        return new GovernanceInsightItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
