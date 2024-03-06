<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsWebApp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsWebApp\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsWebApp\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsWebApp;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to windowsWebApp.
*/
class GraphWindowsWebAppRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.mobileApp entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categories property of the microsoft.graph.mobileApp entity.
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphWindowsWebAppRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileApps/{mobileApp%2Did}/graph.windowsWebApp{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.windowsWebApp
     * @param GraphWindowsWebAppRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsWebApp|null>
     * @throws Exception
    */
    public function get(?GraphWindowsWebAppRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsWebApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.windowsWebApp
     * @param GraphWindowsWebAppRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphWindowsWebAppRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphWindowsWebAppRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphWindowsWebAppRequestBuilder {
        return new GraphWindowsWebAppRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
