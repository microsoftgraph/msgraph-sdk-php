<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventListeners\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AuthenticationEventListener;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationEventListeners property of the microsoft.graph.identityContainer entity.
*/
class AuthenticationEventListenerItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AuthenticationEventListenerItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventListeners/{authenticationEventListener%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an authenticationEventListener object. The following derived types are currently supported.
     * @param AuthenticationEventListenerItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationeventlistener-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?AuthenticationEventListenerItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an authenticationEventListener object. The @odata.type property in the response object indicates the type of the authenticationEventListener object. The following derived types are currently supported.
     * @param AuthenticationEventListenerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationEventListener|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationeventlistener-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthenticationEventListenerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationEventListener::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an authenticationEventListener object. You must specify the @odata.type property and the value of the authenticationEventListener object type to update. The following derived types are currently supported.
     * @param AuthenticationEventListener $body The request body
     * @param AuthenticationEventListenerItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationEventListener|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationeventlistener-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(AuthenticationEventListener $body, ?AuthenticationEventListenerItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationEventListener::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an authenticationEventListener object. The following derived types are currently supported.
     * @param AuthenticationEventListenerItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationEventListenerItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of an authenticationEventListener object. The @odata.type property in the response object indicates the type of the authenticationEventListener object. The following derived types are currently supported.
     * @param AuthenticationEventListenerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationEventListenerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an authenticationEventListener object. You must specify the @odata.type property and the value of the authenticationEventListener object type to update. The following derived types are currently supported.
     * @param AuthenticationEventListener $body The request body
     * @param AuthenticationEventListenerItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationEventListener $body, ?AuthenticationEventListenerItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthenticationEventListenerItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationEventListenerItemRequestBuilder {
        return new AuthenticationEventListenerItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
