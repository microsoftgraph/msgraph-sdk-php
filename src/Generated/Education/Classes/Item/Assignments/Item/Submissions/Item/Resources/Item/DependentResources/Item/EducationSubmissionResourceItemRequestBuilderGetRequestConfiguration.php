<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Submissions\Item\Resources\Item\DependentResources\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EducationSubmissionResourceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EducationSubmissionResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EducationSubmissionResourceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EducationSubmissionResourceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EducationSubmissionResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EducationSubmissionResourceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EducationSubmissionResourceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EducationSubmissionResourceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EducationSubmissionResourceItemRequestBuilderGetQueryParameters {
        return new EducationSubmissionResourceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
