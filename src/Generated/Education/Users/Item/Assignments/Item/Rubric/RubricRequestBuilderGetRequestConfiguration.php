<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Rubric;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RubricRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RubricRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RubricRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RubricRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RubricRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RubricRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RubricRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RubricRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RubricRequestBuilderGetQueryParameters {
        return new RubricRequestBuilderGetQueryParameters($expand, $select);
    }

}
