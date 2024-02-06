<?php

namespace Microsoft\Graph\Generated\Directory\DeviceLocalCredentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\DeviceLocalCredentials\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\DeviceLocalCredentials\Item\DeviceLocalCredentialInfoItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceLocalCredentialInfo;
use Microsoft\Graph\Generated\Models\DeviceLocalCredentialInfoCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceLocalCredentials property of the microsoft.graph.directory entity.
*/
class DeviceLocalCredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceLocalCredentials property of the microsoft.graph.directory entity.
     * @param string $deviceLocalCredentialInfoId The unique identifier of deviceLocalCredentialInfo
     * @return DeviceLocalCredentialInfoItemRequestBuilder
    */
    public function byDeviceLocalCredentialInfoId(string $deviceLocalCredentialInfoId): DeviceLocalCredentialInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceLocalCredentialInfo%2Did'] = $deviceLocalCredentialInfoId;
        return new DeviceLocalCredentialInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceLocalCredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/deviceLocalCredentials{?%24count,%24filter,%24orderby,%24search,%24select,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the deviceLocalCredentialInfo objects and their properties, excluding the credentials property. 
     * @param DeviceLocalCredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceLocalCredentialInfoCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-list-devicelocalcredentials?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceLocalCredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceLocalCredentialInfoCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceLocalCredentials for directory
     * @param DeviceLocalCredentialInfo $body The request body
     * @param DeviceLocalCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceLocalCredentialInfo|null>
     * @throws Exception
    */
    public function post(DeviceLocalCredentialInfo $body, ?DeviceLocalCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceLocalCredentialInfo::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the deviceLocalCredentialInfo objects and their properties, excluding the credentials property. 
     * @param DeviceLocalCredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceLocalCredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceLocalCredentials for directory
     * @param DeviceLocalCredentialInfo $body The request body
     * @param DeviceLocalCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceLocalCredentialInfo $body, ?DeviceLocalCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceLocalCredentialsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceLocalCredentialsRequestBuilder {
        return new DeviceLocalCredentialsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
