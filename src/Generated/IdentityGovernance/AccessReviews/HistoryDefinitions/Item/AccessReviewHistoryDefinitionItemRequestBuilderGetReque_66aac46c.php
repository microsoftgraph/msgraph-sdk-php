<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\HistoryDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessReviewHistoryDefinitionItemRequestBuilderGetRequestConfiguration
*/
class AccessReviewHistoryDefinitionItemRequestBuilderGetReque_66aac46c extends BaseRequestConfiguration 
{
    /**
     * @var AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd|null $queryParameters Request query parameters
    */
    public ?AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd $queryParameters = null;
    
    /**
     * Instantiates a new AccessReviewHistoryDefinitionItemRequestBuilderGetReque_66aac46c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd {
        return new AccessReviewHistoryDefinitionItemRequestBuilderGetQuery_939299dd($expand, $select);
    }

}
