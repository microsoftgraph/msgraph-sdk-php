<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Submissions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Submissions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Submissions\Item\EducationSubmissionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationSubmission;
use Microsoft\Graph\Generated\Models\EducationSubmissionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the submissions property of the microsoft.graph.educationAssignment entity.
*/
class SubmissionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the submissions property of the microsoft.graph.educationAssignment entity.
     * @param string $educationSubmissionId The unique identifier of educationSubmission
     * @return EducationSubmissionItemRequestBuilder
    */
    public function byEducationSubmissionId(string $educationSubmissionId): EducationSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSubmission%2Did'] = $educationSubmissionId;
        return new EducationSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubmissionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignments/{educationAssignment%2Did}/submissions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all the submissions associated with an assignment. Only teachers, students, and applications with application permissions can perform this operation. A teacher or an application with application permissions can get all the submissions while a student can only get submissions that they're associated with.
     * @param SubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmissionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignment-list-submissions?view=graph-rest-1.0 Find more info here
    */
    public function get(?SubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmissionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to submissions for education
     * @param EducationSubmission $body The request body
     * @param SubmissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmission|null>
     * @throws Exception
    */
    public function post(EducationSubmission $body, ?SubmissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all the submissions associated with an assignment. Only teachers, students, and applications with application permissions can perform this operation. A teacher or an application with application permissions can get all the submissions while a student can only get submissions that they're associated with.
     * @param SubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to submissions for education
     * @param EducationSubmission $body The request body
     * @param SubmissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationSubmission $body, ?SubmissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SubmissionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SubmissionsRequestBuilder {
        return new SubmissionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
