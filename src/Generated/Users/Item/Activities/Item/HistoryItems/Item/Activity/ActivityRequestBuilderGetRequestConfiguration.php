<?php

namespace Microsoft\Graph\Generated\Users\Item\Activities\Item\HistoryItems\Item\Activity;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivityRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActivityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivityRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new activityRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActivityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivityRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new activityRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActivityRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ActivityRequestBuilderGetQueryParameters {
        return new ActivityRequestBuilderGetQueryParameters($expand, $select);
    }

}
