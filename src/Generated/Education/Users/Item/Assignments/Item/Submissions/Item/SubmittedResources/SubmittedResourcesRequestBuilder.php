<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SubmittedResources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SubmittedResources\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\SubmittedResources\Item\EducationSubmissionResourceItemRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationSubmissionResource;
use Microsoft\Graph\Generated\Models\EducationSubmissionResourceCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the submittedResources property of the microsoft.graph.educationSubmission entity.
*/
class SubmittedResourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the submittedResources property of the microsoft.graph.educationSubmission entity.
     * @param string $educationSubmissionResourceId The unique identifier of educationSubmissionResource
     * @return EducationSubmissionResourceItemRequestBuilder
    */
    public function byEducationSubmissionResourceId(string $educationSubmissionResourceId): EducationSubmissionResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSubmissionResource%2Did'] = $educationSubmissionResourceId;
        return new EducationSubmissionResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubmittedResourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/users/{educationUser%2Did}/assignments/{educationAssignment%2Did}/submissions/{educationSubmission%2Did}/submittedResources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the educationSubmissionResource objects that were officially submitted for grading. Only teachers, students, and applications with application permissions can perform this operation. The student who owns the submission can't change the submitted list without resubmitting the assignment. This resource is a wrapper around the real resource and can contain a pointer back to the actual assignment resource if this resource was copied from the assignment.
     * @param SubmittedResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmissionResourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationsubmission-list-submittedresources?view=graph-rest-1.0 Find more info here
    */
    public function get(?SubmittedResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmissionResourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to submittedResources for education
     * @param EducationSubmissionResource $body The request body
     * @param SubmittedResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationSubmissionResource|null>
     * @throws Exception
    */
    public function post(EducationSubmissionResource $body, ?SubmittedResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationSubmissionResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the educationSubmissionResource objects that were officially submitted for grading. Only teachers, students, and applications with application permissions can perform this operation. The student who owns the submission can't change the submitted list without resubmitting the assignment. This resource is a wrapper around the real resource and can contain a pointer back to the actual assignment resource if this resource was copied from the assignment.
     * @param SubmittedResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubmittedResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to submittedResources for education
     * @param EducationSubmissionResource $body The request body
     * @param SubmittedResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationSubmissionResource $body, ?SubmittedResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubmittedResourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): SubmittedResourcesRequestBuilder {
        return new SubmittedResourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
