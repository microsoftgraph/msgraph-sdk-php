<?php

namespace Microsoft\Graph\Education\Me\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Education\Me\Assignments\Item\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Categories\Item\EducationCategoryItemRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Resources\Item\EducationAssignmentResourceItemRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Resources\ResourcesRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Rubric\RubricRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\SetUpResourcesFolder\SetUpResourcesFolderRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Submissions\Item\EducationSubmissionItemRequestBuilder;
use Microsoft\Graph\Education\Me\Assignments\Item\Submissions\SubmissionsRequestBuilder;
use Microsoft\Graph\Models\EducationAssignment;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EducationAssignmentItemRequestBuilder 
{
    /**
     * The categories property
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The publish property
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The rubric property
    */
    public function rubric(): RubricRequestBuilder {
        return new RubricRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setUpResourcesFolder property
    */
    public function setUpResourcesFolder(): SetUpResourcesFolderRequestBuilder {
        return new SetUpResourcesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The submissions property
    */
    public function submissions(): SubmissionsRequestBuilder {
        return new SubmissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph.education.me.assignments.item.categories.item collection
     * @param string $id Unique identifier of the item
     * @return EducationCategoryItemRequestBuilder
    */
    public function categoriesById(string $id): EducationCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationCategory%2Did'] = $id;
        return new EducationCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EducationAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/me/assignments/{educationAssignment%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property assignments for education
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?EducationAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * List of assignments for the user. Nullable.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?EducationAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * Update the navigation property assignments in education
     * @param EducationAssignment $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EducationAssignment $body, ?EducationAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Delete navigation property assignments for education
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?EducationAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * List of assignments for the user. Nullable.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EducationAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(EducationAssignment::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property assignments in education
     * @param EducationAssignment $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationAssignment $body, ?EducationAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.education.me.assignments.item.resources.item collection
     * @param string $id Unique identifier of the item
     * @return EducationAssignmentResourceItemRequestBuilder
    */
    public function resourcesById(string $id): EducationAssignmentResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationAssignmentResource%2Did'] = $id;
        return new EducationAssignmentResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.education.me.assignments.item.submissions.item collection
     * @param string $id Unique identifier of the item
     * @return EducationSubmissionItemRequestBuilder
    */
    public function submissionsById(string $id): EducationSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSubmission%2Did'] = $id;
        return new EducationSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
