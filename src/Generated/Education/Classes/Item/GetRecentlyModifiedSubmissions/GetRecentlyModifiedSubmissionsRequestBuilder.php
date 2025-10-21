<?php

namespace Microsoft\\Graph\\Generated\Education\Classes\Item\GetRecentlyModifiedSubmissions;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getRecentlyModifiedSubmissions method.
*/
class GetRecentlyModifiedSubmissionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetRecentlyModifiedSubmissionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/getRecentlyModifiedSubmissions(){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve submissions modified in the previous seven days. Only teachers and applications with application permissions can perform this operation. A submission object represents a student's work for an assignment. Resources associated with the submission represent their work. A teacher or application with application permissions has full access to all submission objects. The grade and feedback from a teacher are part of the educationOutcome associated with this object. Only teachers or applications with application permissions can add or change grades and feedback. Students can't see the grade or feedback until the assignment is released.
     * @param GetRecentlyModifiedSubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetRecentlyModifiedSubmissionsGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationclass-getrecentlymodifiedsubmissions?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetRecentlyModifiedSubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetRecentlyModifiedSubmissionsGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve submissions modified in the previous seven days. Only teachers and applications with application permissions can perform this operation. A submission object represents a student's work for an assignment. Resources associated with the submission represent their work. A teacher or application with application permissions has full access to all submission objects. The grade and feedback from a teacher are part of the educationOutcome associated with this object. Only teachers or applications with application permissions can add or change grades and feedback. Students can't see the grade or feedback until the assignment is released.
     * @param GetRecentlyModifiedSubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetRecentlyModifiedSubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetRecentlyModifiedSubmissionsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetRecentlyModifiedSubmissionsRequestBuilder {
        return new GetRecentlyModifiedSubmissionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
