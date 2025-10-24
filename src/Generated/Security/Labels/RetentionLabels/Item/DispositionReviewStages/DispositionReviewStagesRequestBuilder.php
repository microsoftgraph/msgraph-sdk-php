<?php

namespace Microsoft\\Graph\\Generated\Security\Labels\RetentionLabels\Item\DispositionReviewStages;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\Security\DispositionReviewStage;
use Microsoft\\Graph\\Generated\Models\Security\DispositionReviewStageCollectionResponse;
use Microsoft\\Graph\\Generated\Security\Labels\RetentionLabels\Item\DispositionReviewStages\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Security\Labels\RetentionLabels\Item\DispositionReviewStages\Item\DispositionReviewStageStageNumberItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dispositionReviewStages property of the microsoft.graph.security.retentionLabel entity.
*/
class DispositionReviewStagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dispositionReviewStages property of the microsoft.graph.security.retentionLabel entity.
     * @param string $dispositionReviewStageStageNumber The unique identifier of dispositionReviewStage
     * @return DispositionReviewStageStageNumberItemRequestBuilder
    */
    public function byDispositionReviewStageStageNumber(string $dispositionReviewStageStageNumber): DispositionReviewStageStageNumberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dispositionReviewStage%2DstageNumber'] = $dispositionReviewStageStageNumber;
        return new DispositionReviewStageStageNumberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DispositionReviewStagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/labels/retentionLabels/{retentionLabel%2Did}/dispositionReviewStages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * When action at the end of retention is chosen as 'dispositionReview', dispositionReviewStages specifies a sequential set of stages with at least one reviewer in each stage.
     * @param DispositionReviewStagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DispositionReviewStageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DispositionReviewStagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DispositionReviewStageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to dispositionReviewStages for security
     * @param DispositionReviewStage $body The request body
     * @param DispositionReviewStagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DispositionReviewStage|null>
     * @throws Exception
    */
    public function post(DispositionReviewStage $body, ?DispositionReviewStagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DispositionReviewStage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * When action at the end of retention is chosen as 'dispositionReview', dispositionReviewStages specifies a sequential set of stages with at least one reviewer in each stage.
     * @param DispositionReviewStagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DispositionReviewStagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to dispositionReviewStages for security
     * @param DispositionReviewStage $body The request body
     * @param DispositionReviewStagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DispositionReviewStage $body, ?DispositionReviewStagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DispositionReviewStagesRequestBuilder
    */
    public function withUrl(string $rawUrl): DispositionReviewStagesRequestBuilder {
        return new DispositionReviewStagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
