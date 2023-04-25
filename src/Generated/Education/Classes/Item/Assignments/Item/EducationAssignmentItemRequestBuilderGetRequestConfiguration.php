<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EducationAssignmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EducationAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EducationAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EducationAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EducationAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EducationAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EducationAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EducationAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EducationAssignmentItemRequestBuilderGetQueryParameters {
        return new EducationAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
