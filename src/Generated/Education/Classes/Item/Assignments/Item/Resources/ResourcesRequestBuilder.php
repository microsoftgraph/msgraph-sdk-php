<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Resources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Resources\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Resources\Item\EducationAssignmentResourceItemRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationAssignmentResource;
use Microsoft\Graph\Generated\Models\EducationAssignmentResourceCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resources property of the microsoft.graph.educationAssignment entity.
*/
class ResourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resources property of the microsoft.graph.educationAssignment entity.
     * @param string $educationAssignmentResourceId The unique identifier of educationAssignmentResource
     * @return EducationAssignmentResourceItemRequestBuilder
    */
    public function byEducationAssignmentResourceId(string $educationAssignmentResourceId): EducationAssignmentResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationAssignmentResource%2Did'] = $educationAssignmentResourceId;
        return new EducationAssignmentResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ResourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignments/{educationAssignment%2Did}/resources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all the educationAssignmentResource objects associated with an assignment. Only teachers, students, and applications with application permissions can perform this operation.
     * @param ResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentResourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignment-list-resources?view=graph-rest-1.0 Find more info here
    */
    public function get(?ResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentResourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create an assignment resource. Only teachers can perform this operation. You can create the following types of assignment resources: Every resource has an @odata.type property to indicate which type of resource is being created.
     * @param EducationAssignmentResource $body The request body
     * @param ResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentResource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignment-post-resources?view=graph-rest-1.0 Find more info here
    */
    public function post(EducationAssignmentResource $body, ?ResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get all the educationAssignmentResource objects associated with an assignment. Only teachers, students, and applications with application permissions can perform this operation.
     * @param ResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create an assignment resource. Only teachers can perform this operation. You can create the following types of assignment resources: Every resource has an @odata.type property to indicate which type of resource is being created.
     * @param EducationAssignmentResource $body The request body
     * @param ResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationAssignmentResource $body, ?ResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourcesRequestBuilder {
        return new ResourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
