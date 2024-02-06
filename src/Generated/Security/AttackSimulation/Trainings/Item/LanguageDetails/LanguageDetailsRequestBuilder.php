<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\Trainings\Item\LanguageDetails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TrainingLanguageDetail;
use Microsoft\Graph\Generated\Models\TrainingLanguageDetailCollectionResponse;
use Microsoft\Graph\Generated\Security\AttackSimulation\Trainings\Item\LanguageDetails\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\AttackSimulation\Trainings\Item\LanguageDetails\Item\TrainingLanguageDetailItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the languageDetails property of the microsoft.graph.training entity.
*/
class LanguageDetailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the languageDetails property of the microsoft.graph.training entity.
     * @param string $trainingLanguageDetailId The unique identifier of trainingLanguageDetail
     * @return TrainingLanguageDetailItemRequestBuilder
    */
    public function byTrainingLanguageDetailId(string $trainingLanguageDetailId): TrainingLanguageDetailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['trainingLanguageDetail%2Did'] = $trainingLanguageDetailId;
        return new TrainingLanguageDetailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LanguageDetailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/attackSimulation/trainings/{training%2Did}/languageDetails{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Language specific details on a training.
     * @param LanguageDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrainingLanguageDetailCollectionResponse|null>
     * @throws Exception
    */
    public function get(?LanguageDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrainingLanguageDetailCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to languageDetails for security
     * @param TrainingLanguageDetail $body The request body
     * @param LanguageDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrainingLanguageDetail|null>
     * @throws Exception
    */
    public function post(TrainingLanguageDetail $body, ?LanguageDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrainingLanguageDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Language specific details on a training.
     * @param LanguageDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LanguageDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to languageDetails for security
     * @param TrainingLanguageDetail $body The request body
     * @param LanguageDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TrainingLanguageDetail $body, ?LanguageDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LanguageDetailsRequestBuilder
    */
    public function withUrl(string $rawUrl): LanguageDetailsRequestBuilder {
        return new LanguageDetailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
