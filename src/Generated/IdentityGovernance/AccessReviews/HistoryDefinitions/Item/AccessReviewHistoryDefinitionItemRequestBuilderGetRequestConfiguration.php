<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\HistoryDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessReviewHistoryDefinitionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessReviewHistoryDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters {
        return new AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
