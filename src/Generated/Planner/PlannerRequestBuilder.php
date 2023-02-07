<?php

namespace Microsoft\Graph\Generated\Planner;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Planner;
use Microsoft\Graph\Generated\Planner\Buckets\BucketsRequestBuilder;
use Microsoft\Graph\Generated\Planner\Buckets\Item\PlannerBucketItemRequestBuilder;
use Microsoft\Graph\Generated\Planner\Plans\Item\PlannerPlanItemRequestBuilder;
use Microsoft\Graph\Generated\Planner\Plans\PlansRequestBuilder;
use Microsoft\Graph\Generated\Planner\Tasks\Item\PlannerTaskItemRequestBuilder;
use Microsoft\Graph\Generated\Planner\Tasks\TasksRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the planner singleton.
*/
class PlannerRequestBuilder 
{
    /**
     * Provides operations to manage the buckets property of the microsoft.graph.planner entity.
    */
    public function buckets(): BucketsRequestBuilder {
        return new BucketsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the plans property of the microsoft.graph.planner entity.
    */
    public function plans(): PlansRequestBuilder {
        return new PlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.planner entity.
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the buckets property of the microsoft.graph.planner entity.
     * @param string $id Unique identifier of the item
     * @return PlannerBucketItemRequestBuilder
    */
    public function bucketsById(string $id): PlannerBucketItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerBucket%2Did'] = $id;
        return new PlannerBucketItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Instantiates a new PlannerRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/planner{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get planner
     * @param PlannerRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PlannerRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Planner::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update planner
     * @param Planner $body The request body
     * @param PlannerRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Planner $body, ?PlannerRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Planner::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the plans property of the microsoft.graph.planner entity.
     * @param string $id Unique identifier of the item
     * @return PlannerPlanItemRequestBuilder
    */
    public function plansById(string $id): PlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new PlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the tasks property of the microsoft.graph.planner entity.
     * @param string $id Unique identifier of the item
     * @return PlannerTaskItemRequestBuilder
    */
    public function tasksById(string $id): PlannerTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerTask%2Did'] = $id;
        return new PlannerTaskItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Get planner
     * @param PlannerRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlannerRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update planner
     * @param Planner $body The request body
     * @param PlannerRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Planner $body, ?PlannerRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
