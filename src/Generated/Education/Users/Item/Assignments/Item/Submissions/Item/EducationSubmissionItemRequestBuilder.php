<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\EscapedReturn\ReturnRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Outcomes\Item\EducationOutcomeItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Outcomes\OutcomesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Reassign\ReassignRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Resources\Item\EducationSubmissionResourceItemRequestBuilder as MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemResourcesItemEducationSubmissionResourceItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Resources\ResourcesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SetUpResourcesFolder\SetUpResourcesFolderRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Submit\SubmitRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SubmittedResources\Item\EducationSubmissionResourceItemRequestBuilder as MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemSubmittedResourcesItemEducationSubmissionResourceItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SubmittedResources\SubmittedResourcesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Unsubmit\UnsubmitRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationSubmission;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EducationSubmissionItemRequestBuilder 
{
    /**
     * The return property
    */
    public function escapedReturn(): ReturnRequestBuilder {
        return new ReturnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outcomes property
    */
    public function outcomes(): OutcomesRequestBuilder {
        return new OutcomesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The reassign property
    */
    public function reassign(): ReassignRequestBuilder {
        return new ReassignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The resources property
    */
    public function resources(): ResourcesRequestBuilder {
        return new ResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setUpResourcesFolder property
    */
    public function setUpResourcesFolder(): SetUpResourcesFolderRequestBuilder {
        return new SetUpResourcesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The submit property
    */
    public function submit(): SubmitRequestBuilder {
        return new SubmitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The submittedResources property
    */
    public function submittedResources(): SubmittedResourcesRequestBuilder {
        return new SubmittedResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unsubmit property
    */
    public function unsubmit(): UnsubmitRequestBuilder {
        return new UnsubmitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new EducationSubmissionItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/users/{educationUser%2Did}/assignments/{educationAssignment%2Did}/submissions/{educationSubmission%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property submissions for education
     * @param EducationSubmissionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?EducationSubmissionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Once published, there is a submission object for each student representing their work and grade.  Read-only. Nullable.
     * @param EducationSubmissionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?EducationSubmissionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property submissions in education
     * @param EducationSubmission $body 
     * @param EducationSubmissionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EducationSubmission $body, ?EducationSubmissionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property submissions for education
     * @param EducationSubmissionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?EducationSubmissionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Once published, there is a submission object for each student representing their work and grade.  Read-only. Nullable.
     * @param EducationSubmissionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EducationSubmissionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmission::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.assignments.item.submissions.item.outcomes.item collection
     * @param string $id Unique identifier of the item
     * @return EducationOutcomeItemRequestBuilder
    */
    public function outcomesById(string $id): EducationOutcomeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationOutcome%2Did'] = $id;
        return new EducationOutcomeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property submissions in education
     * @param EducationSubmission $body 
     * @param EducationSubmissionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationSubmission $body, ?EducationSubmissionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmission::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.assignments.item.submissions.item.resources.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemResourcesItemEducationSubmissionResourceItemRequestBuilder
    */
    public function resourcesById(string $id): MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemResourcesItemEducationSubmissionResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSubmissionResource%2Did'] = $id;
        return new MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemResourcesItemEducationSubmissionResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.assignments.item.submissions.item.submittedResources.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemSubmittedResourcesItemEducationSubmissionResourceItemRequestBuilder
    */
    public function submittedResourcesById(string $id): MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemSubmittedResourcesItemEducationSubmissionResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSubmissionResource%2Did'] = $id;
        return new MicrosoftGraphGeneratedEducationUsersItemAssignmentsItemSubmissionsItemSubmittedResourcesItemEducationSubmissionResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
