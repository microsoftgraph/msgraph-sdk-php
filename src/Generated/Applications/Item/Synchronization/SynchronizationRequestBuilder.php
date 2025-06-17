<?php

namespace Microsoft\Graph\Generated\Applications\Item\Synchronization;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Applications\Item\Synchronization\AcquireAccessToken\AcquireAccessTokenRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Synchronization\Jobs\JobsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Synchronization\Secrets\SecretsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Synchronization\Templates\TemplatesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Synchronization;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the synchronization property of the microsoft.graph.application entity.
*/
class SynchronizationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the acquireAccessToken method.
    */
    public function acquireAccessToken(): AcquireAccessTokenRequestBuilder {
        return new AcquireAccessTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the jobs property of the microsoft.graph.synchronization entity.
    */
    public function jobs(): JobsRequestBuilder {
        return new JobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The secrets property
    */
    public function secrets(): SecretsRequestBuilder {
        return new SecretsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templates property of the microsoft.graph.synchronization entity.
    */
    public function templates(): TemplatesRequestBuilder {
        return new TemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SynchronizationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/synchronization{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property synchronization for applications
     * @param SynchronizationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SynchronizationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     * @param SynchronizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Synchronization|null>
     * @throws Exception
    */
    public function get(?SynchronizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Synchronization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property synchronization in applications
     * @param Synchronization $body The request body
     * @param SynchronizationRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Synchronization|null>
     * @throws Exception
    */
    public function put(Synchronization $body, ?SynchronizationRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Synchronization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property synchronization for applications
     * @param SynchronizationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SynchronizationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     * @param SynchronizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SynchronizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property synchronization in applications
     * @param Synchronization $body The request body
     * @param SynchronizationRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(Synchronization $body, ?SynchronizationRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return SynchronizationRequestBuilder
    */
    public function withUrl(string $rawUrl): SynchronizationRequestBuilder {
        return new SynchronizationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
