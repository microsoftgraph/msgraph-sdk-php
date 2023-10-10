<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Resources\ResourcesRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Rubric\RubricRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\SetUpFeedbackResourcesFolder\SetUpFeedbackResourcesFolderRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\SetUpResourcesFolder\SetUpResourcesFolderRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Submissions\SubmissionsRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationAssignment;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.educationClass entity.
*/
class EducationAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the categories property of the microsoft.graph.educationAssignment entity.
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the publish method.
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resources property of the microsoft.graph.educationAssignment entity.
    */
    public function resources(): ResourcesRequestBuilder {
        return new ResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rubric property of the microsoft.graph.educationAssignment entity.
    */
    public function rubric(): RubricRequestBuilder {
        return new RubricRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setUpFeedbackResourcesFolder method.
    */
    public function setUpFeedbackResourcesFolder(): SetUpFeedbackResourcesFolderRequestBuilder {
        return new SetUpFeedbackResourcesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setUpResourcesFolder method.
    */
    public function setUpResourcesFolder(): SetUpResourcesFolderRequestBuilder {
        return new SetUpResourcesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the submissions property of the microsoft.graph.educationAssignment entity.
    */
    public function submissions(): SubmissionsRequestBuilder {
        return new SubmissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EducationAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignments/{educationAssignment%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an existing assignment. Only teachers within a class can delete assignments. This API is available in the following national cloud deployments.
     * @param EducationAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/educationassignment-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?EducationAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get the properties and relationships of an assignment. Only teachers, students, and applications with application permissions can perform this operation. Students can only see assignments assigned to them; teachers and applications with application permissions can see all assignments in a class. This API is available in the following national cloud deployments.
     * @param EducationAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/educationassignment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?EducationAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update an educationAssignment object.  Only teachers can perform this action.  Alternatively, request to change the status of an assignment with publish action. Don't use a PATCH operation for this purpose. This API is available in the following national cloud deployments.
     * @param EducationAssignment $body The request body
     * @param EducationAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/educationassignment-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(EducationAssignment $body, ?EducationAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete an existing assignment. Only teachers within a class can delete assignments. This API is available in the following national cloud deployments.
     * @param EducationAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EducationAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get the properties and relationships of an assignment. Only teachers, students, and applications with application permissions can perform this operation. Students can only see assignments assigned to them; teachers and applications with application permissions can see all assignments in a class. This API is available in the following national cloud deployments.
     * @param EducationAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EducationAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update an educationAssignment object.  Only teachers can perform this action.  Alternatively, request to change the status of an assignment with publish action. Don't use a PATCH operation for this purpose. This API is available in the following national cloud deployments.
     * @param EducationAssignment $body The request body
     * @param EducationAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationAssignment $body, ?EducationAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return EducationAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EducationAssignmentItemRequestBuilder {
        return new EducationAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
