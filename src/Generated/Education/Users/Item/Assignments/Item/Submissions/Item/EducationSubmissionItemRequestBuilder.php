<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\EscapedReturn\ReturnRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Outcomes\OutcomesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Reassign\ReassignRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Resources\ResourcesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SetUpResourcesFolder\SetUpResourcesFolderRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Submit\SubmitRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SubmittedResources\SubmittedResourcesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Unsubmit\UnsubmitRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationSubmission;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the submissions property of the microsoft.graph.educationAssignment entity.
*/
class EducationSubmissionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the return method.
    */
    public function escapedReturn(): ReturnRequestBuilder {
        return new ReturnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the outcomes property of the microsoft.graph.educationSubmission entity.
    */
    public function outcomes(): OutcomesRequestBuilder {
        return new OutcomesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reassign method.
    */
    public function reassign(): ReassignRequestBuilder {
        return new ReassignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resources property of the microsoft.graph.educationSubmission entity.
    */
    public function resources(): ResourcesRequestBuilder {
        return new ResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setUpResourcesFolder method.
    */
    public function setUpResourcesFolder(): SetUpResourcesFolderRequestBuilder {
        return new SetUpResourcesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the submit method.
    */
    public function submit(): SubmitRequestBuilder {
        return new SubmitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the submittedResources property of the microsoft.graph.educationSubmission entity.
    */
    public function submittedResources(): SubmittedResourcesRequestBuilder {
        return new SubmittedResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsubmit method.
    */
    public function unsubmit(): UnsubmitRequestBuilder {
        return new UnsubmitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EducationSubmissionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/users/{educationUser%2Did}/assignments/{educationAssignment%2Did}/submissions/{educationSubmission%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property submissions for education
     * @param EducationSubmissionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EducationSubmissionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve a particular submission. Only teachers, students, and applications with application permissions can perform this operation. A submission object represents a student's work for an assignment. Resources associated with the submission represent this work. Only the assignedTo student can see and modify the submission. A teacher or application with application permissions has full access to all submissions. The grade and feedback from a teacher are part of the educationOutcome associated with this object. Only teachers or applications with application permissions can add or change grades and feedback. Students will not see the grade or feedback until the assignment has been released. This API is available in the following national cloud deployments.
     * @param EducationSubmissionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmission|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationsubmission-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?EducationSubmissionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property submissions in education
     * @param EducationSubmission $body The request body
     * @param EducationSubmissionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmission|null>
     * @throws Exception
    */
    public function patch(EducationSubmission $body, ?EducationSubmissionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property submissions for education
     * @param EducationSubmissionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EducationSubmissionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve a particular submission. Only teachers, students, and applications with application permissions can perform this operation. A submission object represents a student's work for an assignment. Resources associated with the submission represent this work. Only the assignedTo student can see and modify the submission. A teacher or application with application permissions has full access to all submissions. The grade and feedback from a teacher are part of the educationOutcome associated with this object. Only teachers or applications with application permissions can add or change grades and feedback. Students will not see the grade or feedback until the assignment has been released. This API is available in the following national cloud deployments.
     * @param EducationSubmissionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EducationSubmissionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property submissions in education
     * @param EducationSubmission $body The request body
     * @param EducationSubmissionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationSubmission $body, ?EducationSubmissionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return EducationSubmissionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EducationSubmissionItemRequestBuilder {
        return new EducationSubmissionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
