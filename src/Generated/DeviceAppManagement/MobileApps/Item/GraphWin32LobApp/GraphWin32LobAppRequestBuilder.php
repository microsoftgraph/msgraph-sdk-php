<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWin32LobApp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWin32LobApp\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWin32LobApp\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWin32LobApp\ContentVersions\ContentVersionsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Win32LobApp;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to win32LobApp.
*/
class GraphWin32LobAppRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the contentVersions property of the microsoft.graph.mobileLobApp entity.
    */
    public function contentVersions(): ContentVersionsRequestBuilder {
        return new ContentVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphWin32LobAppRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileApps/{mobileApp%2Did}/graph.win32LobApp{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.win32LobApp
     * @param GraphWin32LobAppRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Win32LobApp|null>
     * @throws Exception
    */
    public function get(?GraphWin32LobAppRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Win32LobApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.win32LobApp
     * @param GraphWin32LobAppRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphWin32LobAppRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphWin32LobAppRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphWin32LobAppRequestBuilder {
        return new GraphWin32LobAppRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
