<?php

namespace Microsoft\Graph\Generated\Users\Item\Presence;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Presence;
use Microsoft\Graph\Generated\Users\Item\Presence\ClearPresence\ClearPresenceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Presence\ClearUserPreferredPresence\ClearUserPreferredPresenceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Presence\SetPresence\SetPresenceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Presence\SetStatusMessage\SetStatusMessageRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Presence\SetUserPreferredPresence\SetUserPreferredPresenceRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the presence property of the microsoft.graph.user entity.
*/
class PresenceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the clearPresence method.
    */
    public function clearPresence(): ClearPresenceRequestBuilder {
        return new ClearPresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clearUserPreferredPresence method.
    */
    public function clearUserPreferredPresence(): ClearUserPreferredPresenceRequestBuilder {
        return new ClearUserPreferredPresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setPresence method.
    */
    public function setPresence(): SetPresenceRequestBuilder {
        return new SetPresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setStatusMessage method.
    */
    public function setStatusMessage(): SetStatusMessageRequestBuilder {
        return new SetStatusMessageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setUserPreferredPresence method.
    */
    public function setUserPreferredPresence(): SetUserPreferredPresenceRequestBuilder {
        return new SetUserPreferredPresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PresenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/presence{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property presence for users
     * @param PresenceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PresenceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set a presence status message for a user. An optional expiration date and time can be supplied.
     * @param PresenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Presence|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/presence-setstatusmessage?view=graph-rest-1.0 Find more info here
    */
    public function get(?PresenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Presence::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property presence in users
     * @param Presence $body The request body
     * @param PresenceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Presence|null>
     * @throws Exception
    */
    public function patch(Presence $body, ?PresenceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Presence::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property presence for users
     * @param PresenceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PresenceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Set a presence status message for a user. An optional expiration date and time can be supplied.
     * @param PresenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PresenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property presence in users
     * @param Presence $body The request body
     * @param PresenceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Presence $body, ?PresenceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PresenceRequestBuilder
    */
    public function withUrl(string $rawUrl): PresenceRequestBuilder {
        return new PresenceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
