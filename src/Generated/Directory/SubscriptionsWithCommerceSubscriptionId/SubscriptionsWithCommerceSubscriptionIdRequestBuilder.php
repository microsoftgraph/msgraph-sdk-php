<?php

namespace Microsoft\Graph\Generated\Directory\SubscriptionsWithCommerceSubscriptionId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CompanySubscription;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the subscriptions property of the microsoft.graph.directory entity.
*/
class SubscriptionsWithCommerceSubscriptionIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SubscriptionsWithCommerceSubscriptionIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $commerceSubscriptionId Alternate key of companySubscription
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $commerceSubscriptionId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/subscriptions(commerceSubscriptionId=\'{commerceSubscriptionId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['commerceSubscriptionId'] = $commerceSubscriptionId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property subscriptions for directory
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SubscriptionsWithCommerceSubscriptionIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get a specific commercial subscription that an organization acquired.
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CompanySubscription|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/companysubscription-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CompanySubscription::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property subscriptions in directory
     * @param CompanySubscription $body The request body
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CompanySubscription|null>
     * @throws Exception
    */
    public function patch(CompanySubscription $body, ?SubscriptionsWithCommerceSubscriptionIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CompanySubscription::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property subscriptions for directory
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SubscriptionsWithCommerceSubscriptionIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get a specific commercial subscription that an organization acquired.
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property subscriptions in directory
     * @param CompanySubscription $body The request body
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CompanySubscription $body, ?SubscriptionsWithCommerceSubscriptionIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubscriptionsWithCommerceSubscriptionIdRequestBuilder
    */
    public function withUrl(string $rawUrl): SubscriptionsWithCommerceSubscriptionIdRequestBuilder {
        return new SubscriptionsWithCommerceSubscriptionIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
