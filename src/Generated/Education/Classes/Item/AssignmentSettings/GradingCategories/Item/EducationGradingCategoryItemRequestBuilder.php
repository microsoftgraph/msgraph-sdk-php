<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\AssignmentSettings\GradingCategories\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\EducationGradingCategory;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the gradingCategories property of the microsoft.graph.educationAssignmentSettings entity.
*/
class EducationGradingCategoryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EducationGradingCategoryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignmentSettings/gradingCategories/{educationGradingCategory%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property gradingCategories for education
     * @param EducationGradingCategoryItemRequestBuilderDeleteRequest_8862e060|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EducationGradingCategoryItemRequestBuilderDeleteRequest_8862e060 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * When set, enables users to weight assignments differently when computing a class average grade.
     * @param EducationGradingCategoryItemRequestBuilderGetRequestCon_def654be|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationGradingCategory|null>
     * @throws Exception
    */
    public function get(?EducationGradingCategoryItemRequestBuilderGetRequestCon_def654be $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationGradingCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update a single gradingCategory on the educationAssignmentSettings. Only teachers can perform this operation.
     * @param EducationGradingCategory $body The request body
     * @param EducationGradingCategoryItemRequestBuilderPatchRequestC_9df67d6b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationGradingCategory|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationgradingcategory-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(EducationGradingCategory $body, ?EducationGradingCategoryItemRequestBuilderPatchRequestC_9df67d6b $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationGradingCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property gradingCategories for education
     * @param EducationGradingCategoryItemRequestBuilderDeleteRequest_8862e060|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EducationGradingCategoryItemRequestBuilderDeleteRequest_8862e060 $requestConfiguration = null): RequestInformation {
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
     * When set, enables users to weight assignments differently when computing a class average grade.
     * @param EducationGradingCategoryItemRequestBuilderGetRequestCon_def654be|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EducationGradingCategoryItemRequestBuilderGetRequestCon_def654be $requestConfiguration = null): RequestInformation {
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
     * Update a single gradingCategory on the educationAssignmentSettings. Only teachers can perform this operation.
     * @param EducationGradingCategory $body The request body
     * @param EducationGradingCategoryItemRequestBuilderPatchRequestC_9df67d6b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationGradingCategory $body, ?EducationGradingCategoryItemRequestBuilderPatchRequestC_9df67d6b $requestConfiguration = null): RequestInformation {
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
     * @return EducationGradingCategoryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EducationGradingCategoryItemRequestBuilder {
        return new EducationGradingCategoryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
