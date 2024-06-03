<?php

namespace Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\DispositionReviewStages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DispositionReviewStageStageNumberItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DispositionReviewStageStageNumberItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters {
        return new DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
