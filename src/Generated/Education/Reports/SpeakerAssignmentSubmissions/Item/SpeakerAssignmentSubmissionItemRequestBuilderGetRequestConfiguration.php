<?php

namespace Microsoft\Graph\Generated\Education\Reports\SpeakerAssignmentSubmissions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SpeakerAssignmentSubmissionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SpeakerAssignmentSubmissionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters {
        return new SpeakerAssignmentSubmissionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
