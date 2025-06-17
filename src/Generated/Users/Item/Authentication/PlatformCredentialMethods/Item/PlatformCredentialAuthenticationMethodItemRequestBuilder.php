<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PlatformCredentialMethods\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PlatformCredentialAuthenticationMethod;
use Microsoft\Graph\Generated\Users\Item\Authentication\PlatformCredentialMethods\Item\Device\DeviceRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the platformCredentialMethods property of the microsoft.graph.authentication entity.
*/
class PlatformCredentialAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the device property of the microsoft.graph.platformCredentialAuthenticationMethod entity.
    */
    public function device(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PlatformCredentialAuthenticationMethodItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/platformCredentialMethods/{platformCredentialAuthenticationMethod%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a platformCredentialAuthenticationMethod object.
     * @param PlatformCredentialAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/platformcredentialauthenticationmethod-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?PlatformCredentialAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents a platform credential instance registered to a user on Mac OS.
     * @param PlatformCredentialAuthenticationMethodItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlatformCredentialAuthenticationMethod|null>
     * @throws Exception
    */
    public function get(?PlatformCredentialAuthenticationMethodItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlatformCredentialAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a platformCredentialAuthenticationMethod object.
     * @param PlatformCredentialAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PlatformCredentialAuthenticationMethodItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Represents a platform credential instance registered to a user on Mac OS.
     * @param PlatformCredentialAuthenticationMethodItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlatformCredentialAuthenticationMethodItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PlatformCredentialAuthenticationMethodItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PlatformCredentialAuthenticationMethodItemRequestBuilder {
        return new PlatformCredentialAuthenticationMethodItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
