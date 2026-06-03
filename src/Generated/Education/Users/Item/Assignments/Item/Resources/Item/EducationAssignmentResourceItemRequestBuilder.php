<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Resources\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Resources\Item\DependentResources\DependentResourcesRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationAssignmentResource;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resources property of the microsoft.graph.educationAssignment entity.
*/
class EducationAssignmentResourceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the dependentResources property of the microsoft.graph.educationAssignmentResource entity.
    */
    public function dependentResources(): DependentResourcesRequestBuilder {
        return new DependentResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EducationAssignmentResourceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/users/{educationUser%2Did}/assignments/{educationAssignment%2Did}/resources/{educationAssignmentResource%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property resources for education
     * @param EducationAssignmentResourceItemRequestBuilderDeleteRequ_1395b628|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EducationAssignmentResourceItemRequestBuilderDeleteRequ_1395b628 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Learning objects that are associated with this assignment. Only teachers can modify this list. Nullable.
     * @param EducationAssignmentResourceItemRequestBuilderGetRequest_a8431760|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentResource|null>
     * @throws Exception
    */
    public function get(?EducationAssignmentResourceItemRequestBuilderGetRequest_a8431760 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property resources in education
     * @param EducationAssignmentResource $body The request body
     * @param EducationAssignmentResourceItemRequestBuilderPatchReque_ebfcffc6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentResource|null>
     * @throws Exception
    */
    public function patch(EducationAssignmentResource $body, ?EducationAssignmentResourceItemRequestBuilderPatchReque_ebfcffc6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property resources for education
     * @param EducationAssignmentResourceItemRequestBuilderDeleteRequ_1395b628|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EducationAssignmentResourceItemRequestBuilderDeleteRequ_1395b628 $requestConfiguration = null): RequestInformation {
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
     * Learning objects that are associated with this assignment. Only teachers can modify this list. Nullable.
     * @param EducationAssignmentResourceItemRequestBuilderGetRequest_a8431760|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EducationAssignmentResourceItemRequestBuilderGetRequest_a8431760 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property resources in education
     * @param EducationAssignmentResource $body The request body
     * @param EducationAssignmentResourceItemRequestBuilderPatchReque_ebfcffc6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationAssignmentResource $body, ?EducationAssignmentResourceItemRequestBuilderPatchReque_ebfcffc6 $requestConfiguration = null): RequestInformation {
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
     * @return EducationAssignmentResourceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EducationAssignmentResourceItemRequestBuilder {
        return new EducationAssignmentResourceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
