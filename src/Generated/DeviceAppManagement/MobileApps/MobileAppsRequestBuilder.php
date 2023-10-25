<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphAndroidLobApp\GraphAndroidLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphAndroidStoreApp\GraphAndroidStoreAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphIosLobApp\GraphIosLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphIosStoreApp\GraphIosStoreAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphIosVppApp\GraphIosVppAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphMacOSDmgApp\GraphMacOSDmgAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphMacOSLobApp\GraphMacOSLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphManagedAndroidLobApp\GraphManagedAndroidLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphManagedIOSLobApp\GraphManagedIOSLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphManagedMobileLobApp\GraphManagedMobileLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphMicrosoftStoreForBusinessApp\GraphMicrosoftStoreForBusinessAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphWin32LobApp\GraphWin32LobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphWindowsAppX\GraphWindowsAppXRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphWindowsMobileMSI\GraphWindowsMobileMSIRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphWindowsUniversalAppX\GraphWindowsUniversalAppXRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\GraphWindowsWebApp\GraphWindowsWebAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\MobileAppItemRequestBuilder;
use Microsoft\Graph\Generated\Models\MobileApp;
use Microsoft\Graph\Generated\Models\MobileAppCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
*/
class MobileAppsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to androidLobApp.
    */
    public function graphAndroidLobApp(): GraphAndroidLobAppRequestBuilder {
        return new GraphAndroidLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to androidStoreApp.
    */
    public function graphAndroidStoreApp(): GraphAndroidStoreAppRequestBuilder {
        return new GraphAndroidStoreAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to iosLobApp.
    */
    public function graphIosLobApp(): GraphIosLobAppRequestBuilder {
        return new GraphIosLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to iosStoreApp.
    */
    public function graphIosStoreApp(): GraphIosStoreAppRequestBuilder {
        return new GraphIosStoreAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to iosVppApp.
    */
    public function graphIosVppApp(): GraphIosVppAppRequestBuilder {
        return new GraphIosVppAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to macOSDmgApp.
    */
    public function graphMacOSDmgApp(): GraphMacOSDmgAppRequestBuilder {
        return new GraphMacOSDmgAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to macOSLobApp.
    */
    public function graphMacOSLobApp(): GraphMacOSLobAppRequestBuilder {
        return new GraphMacOSLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to managedAndroidLobApp.
    */
    public function graphManagedAndroidLobApp(): GraphManagedAndroidLobAppRequestBuilder {
        return new GraphManagedAndroidLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to managedIOSLobApp.
    */
    public function graphManagedIOSLobApp(): GraphManagedIOSLobAppRequestBuilder {
        return new GraphManagedIOSLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to managedMobileLobApp.
    */
    public function graphManagedMobileLobApp(): GraphManagedMobileLobAppRequestBuilder {
        return new GraphManagedMobileLobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to microsoftStoreForBusinessApp.
    */
    public function graphMicrosoftStoreForBusinessApp(): GraphMicrosoftStoreForBusinessAppRequestBuilder {
        return new GraphMicrosoftStoreForBusinessAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to win32LobApp.
    */
    public function graphWin32LobApp(): GraphWin32LobAppRequestBuilder {
        return new GraphWin32LobAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to windowsAppX.
    */
    public function graphWindowsAppX(): GraphWindowsAppXRequestBuilder {
        return new GraphWindowsAppXRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to windowsMobileMSI.
    */
    public function graphWindowsMobileMSI(): GraphWindowsMobileMSIRequestBuilder {
        return new GraphWindowsMobileMSIRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to windowsUniversalAppX.
    */
    public function graphWindowsUniversalAppX(): GraphWindowsUniversalAppXRequestBuilder {
        return new GraphWindowsUniversalAppXRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to windowsWebApp.
    */
    public function graphWindowsWebApp(): GraphWindowsWebAppRequestBuilder {
        return new GraphWindowsWebAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
     * @param string $mobileAppId The unique identifier of mobileApp
     * @return MobileAppItemRequestBuilder
    */
    public function byMobileAppId(string $mobileAppId): MobileAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileApp%2Did'] = $mobileAppId;
        return new MobileAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileAppsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileApps{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the androidStoreApp objects.
     * @param MobileAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/intune-apps-androidstoreapp-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileAppCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new windowsMicrosoftEdgeApp object.
     * @param MobileApp $body The request body
     * @param MobileAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/intune-apps-windowsmicrosoftedgeapp-create?view=graph-rest-1.0 Find more info here
    */
    public function post(MobileApp $body, ?MobileAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * List properties and relationships of the androidStoreApp objects.
     * @param MobileAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new windowsMicrosoftEdgeApp object.
     * @param MobileApp $body The request body
     * @param MobileAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MobileApp $body, ?MobileAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileAppsRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileAppsRequestBuilder {
        return new MobileAppsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
