<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessReviewScheduleDefinitionItemRequestBuilderGetRequestConfiguration
*/
class AccessReviewScheduleDefinitionItemRequestBuilderGetRequ_14559b02 extends BaseRequestConfiguration 
{
    /**
     * @var AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca|null $queryParameters Request query parameters
    */
    public ?AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca $queryParameters = null;
    
    /**
     * Instantiates a new AccessReviewScheduleDefinitionItemRequestBuilderGetRequ_14559b02 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca {
        return new AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca($expand, $select);
    }

}
