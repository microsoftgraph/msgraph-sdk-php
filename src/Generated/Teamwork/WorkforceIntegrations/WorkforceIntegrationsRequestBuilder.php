<?php

namespace Microsoft\Graph\Generated\Teamwork\WorkforceIntegrations;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkforceIntegration;
use Microsoft\Graph\Generated\Models\WorkforceIntegrationCollectionResponse;
use Microsoft\Graph\Generated\Teamwork\WorkforceIntegrations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teamwork\WorkforceIntegrations\Item\WorkforceIntegrationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the workforceIntegrations property of the microsoft.graph.teamwork entity.
*/
class WorkforceIntegrationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the workforceIntegrations property of the microsoft.graph.teamwork entity.
     * @param string $workforceIntegrationId The unique identifier of workforceIntegration
     * @return WorkforceIntegrationItemRequestBuilder
    */
    public function byWorkforceIntegrationId(string $workforceIntegrationId): WorkforceIntegrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workforceIntegration%2Did'] = $workforceIntegrationId;
        return new WorkforceIntegrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WorkforceIntegrationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/workforceIntegrations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of workforceIntegration objects. This API is available in the following national cloud deployments.
     * @param WorkforceIntegrationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/workforceintegration-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?WorkforceIntegrationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkforceIntegrationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new workforceIntegration object.You can set up which entities you want to receive Shifts synchronous change notifications on and set entities to configure filtering by WFM rules eligibility for, including swap requests. This API is available in the following national cloud deployments.
     * @param WorkforceIntegration $body The request body
     * @param WorkforceIntegrationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/workforceintegration-post?view=graph-rest-1.0 Find more info here
    */
    public function post(WorkforceIntegration $body, ?WorkforceIntegrationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkforceIntegration::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a list of workforceIntegration objects. This API is available in the following national cloud deployments.
     * @param WorkforceIntegrationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkforceIntegrationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new workforceIntegration object.You can set up which entities you want to receive Shifts synchronous change notifications on and set entities to configure filtering by WFM rules eligibility for, including swap requests. This API is available in the following national cloud deployments.
     * @param WorkforceIntegration $body The request body
     * @param WorkforceIntegrationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkforceIntegration $body, ?WorkforceIntegrationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WorkforceIntegrationsRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkforceIntegrationsRequestBuilder {
        return new WorkforceIntegrationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
