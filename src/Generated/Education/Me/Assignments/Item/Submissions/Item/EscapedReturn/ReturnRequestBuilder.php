<?php

namespace Microsoft\Graph\Generated\Education\Me\Assignments\Item\Submissions\Item\EscapedReturn;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\EducationSubmission;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the return method.
*/
class ReturnRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReturnRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/me/assignments/{educationAssignment%2Did}/submissions/{educationSubmission%2Did}/return');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Make the grade and feedback associated with this submission available to the student.  This action changes the status of the submission from 'submitted' to 'returned' and indicates that feedback is provided or grading is done. This action can only be done by the teacher.
     * @param ReturnRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmission|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationsubmission-return?view=graph-rest-1.0 Find more info here
    */
    public function post(?ReturnRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Make the grade and feedback associated with this submission available to the student.  This action changes the status of the submission from 'submitted' to 'returned' and indicates that feedback is provided or grading is done. This action can only be done by the teacher.
     * @param ReturnRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ReturnRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReturnRequestBuilder
    */
    public function withUrl(string $rawUrl): ReturnRequestBuilder {
        return new ReturnRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
