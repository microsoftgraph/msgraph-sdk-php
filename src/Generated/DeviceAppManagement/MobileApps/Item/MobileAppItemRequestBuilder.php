<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphAndroidLobApp\GraphAndroidLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphAndroidStoreApp\GraphAndroidStoreAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphIosLobApp\GraphIosLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphIosStoreApp\GraphIosStoreAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphIosVppApp\GraphIosVppAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphMacOSDmgApp\GraphMacOSDmgAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphMacOSLobApp\GraphMacOSLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphManagedAndroidLobApp\GraphManagedAndroidLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphManagedIOSLobApp\GraphManagedIOSLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphManagedMobileLobApp\GraphManagedMobileLobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphMicrosoftStoreForBusinessApp\GraphMicrosoftStoreForBusinessAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWin32LobApp\GraphWin32LobAppRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsAppX\GraphWindowsAppXRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsMobileMSI\GraphWindowsMobileMSIRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsUniversalAppX\GraphWindowsUniversalAppXRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsWebApp\GraphWindowsWebAppRequestBuilder;
use Microsoft\Graph\Generated\Models\MobileApp;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
*/
class MobileAppItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new MobileAppItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileApps/{mobileApp%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a macOSMicrosoftEdgeApp.
     * @param MobileAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-apps-macosmicrosoftedgeapp-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?MobileAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the mobileApp object.
     * @param MobileAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileApp|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-apps-mobileapp-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a microsoftStoreForBusinessApp object.
     * @param MobileApp $body The request body
     * @param MobileAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileApp|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-apps-microsoftstoreforbusinessapp-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(MobileApp $body, ?MobileAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a macOSMicrosoftEdgeApp.
     * @param MobileAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MobileAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * Read properties and relationships of the mobileApp object.
     * @param MobileAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a microsoftStoreForBusinessApp object.
     * @param MobileApp $body The request body
     * @param MobileAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MobileApp $body, ?MobileAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return MobileAppItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileAppItemRequestBuilder {
        return new MobileAppItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
