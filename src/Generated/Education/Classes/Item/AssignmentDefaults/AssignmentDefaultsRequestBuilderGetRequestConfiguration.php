<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\AssignmentDefaults;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignmentDefaultsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AssignmentDefaultsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignmentDefaultsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AssignmentDefaultsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignmentDefaultsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignmentDefaultsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignmentDefaultsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignmentDefaultsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignmentDefaultsRequestBuilderGetQueryParameters {
        return new AssignmentDefaultsRequestBuilderGetQueryParameters($expand, $select);
    }

}
