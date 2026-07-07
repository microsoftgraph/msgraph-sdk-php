<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Stages\Item\Decisions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessReviewInstanceDecisionItemItemRequestBuilderGetRequestConfiguration
*/
class AccessReviewInstanceDecisionItemItemRequestBuilderGetRe_6d4f61fd extends BaseRequestConfiguration 
{
    /**
     * @var AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307|null $queryParameters Request query parameters
    */
    public ?AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307 $queryParameters = null;
    
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemItemRequestBuilderGetRe_6d4f61fd and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307 {
        return new AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307($expand, $select);
    }

}
