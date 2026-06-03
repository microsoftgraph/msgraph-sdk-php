<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsHelloForBusinessAuthenticationMethod;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\DeviceRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsHelloForBusinessMethods property of the microsoft.graph.authentication entity.
*/
class WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the device property of the microsoft.graph.windowsHelloForBusinessAuthenticationMethod entity.
    */
    public function device(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a windowsHelloForBusinessAuthenticationMethod object.
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestB_5f73e9f5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowshelloforbusinessauthenticationmethod-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?WindowsHelloForBusinessAuthenticationMethodItemRequestB_5f73e9f5 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a windowsHelloForBusinessAuthenticationMethod object.
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestB_4b1df838|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsHelloForBusinessAuthenticationMethod|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowshelloforbusinessauthenticationmethod-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?WindowsHelloForBusinessAuthenticationMethodItemRequestB_4b1df838 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsHelloForBusinessAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a windowsHelloForBusinessAuthenticationMethod object.
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestB_5f73e9f5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsHelloForBusinessAuthenticationMethodItemRequestB_5f73e9f5 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a windowsHelloForBusinessAuthenticationMethod object.
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestB_4b1df838|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsHelloForBusinessAuthenticationMethodItemRequestB_4b1df838 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder {
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
