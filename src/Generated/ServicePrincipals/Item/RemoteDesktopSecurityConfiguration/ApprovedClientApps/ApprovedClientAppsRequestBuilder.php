<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration\ApprovedClientApps;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ApprovedClientApp;
use Microsoft\Graph\Generated\Models\ApprovedClientAppCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration\ApprovedClientApps\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration\ApprovedClientApps\Item\ApprovedClientAppItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the approvedClientApps property of the microsoft.graph.remoteDesktopSecurityConfiguration entity.
*/
class ApprovedClientAppsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the approvedClientApps property of the microsoft.graph.remoteDesktopSecurityConfiguration entity.
     * @param string $approvedClientAppId The unique identifier of approvedClientApp
     * @return ApprovedClientAppItemRequestBuilder
    */
    public function byApprovedClientAppId(string $approvedClientAppId): ApprovedClientAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approvedClientApp%2Did'] = $approvedClientAppId;
        return new ApprovedClientAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApprovedClientAppsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/remoteDesktopSecurityConfiguration/approvedClientApps{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of approved client apps that are associated with the RDS configuration. Supports $expand.
     * @param ApprovedClientAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovedClientAppCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/remotedesktopsecurityconfiguration-list-approvedclientapps?view=graph-rest-1.0 Find more info here
    */
    public function get(?ApprovedClientAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovedClientAppCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new approvedClientApp object for the remoteDesktopSecurityConfiguration object on a service principal. You can configure a maximum of 20 approved client apps.
     * @param ApprovedClientApp $body The request body
     * @param ApprovedClientAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovedClientApp|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/remotedesktopsecurityconfiguration-post-approvedclientapps?view=graph-rest-1.0 Find more info here
    */
    public function post(ApprovedClientApp $body, ?ApprovedClientAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovedClientApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of approved client apps that are associated with the RDS configuration. Supports $expand.
     * @param ApprovedClientAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApprovedClientAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new approvedClientApp object for the remoteDesktopSecurityConfiguration object on a service principal. You can configure a maximum of 20 approved client apps.
     * @param ApprovedClientApp $body The request body
     * @param ApprovedClientAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApprovedClientApp $body, ?ApprovedClientAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApprovedClientAppsRequestBuilder
    */
    public function withUrl(string $rawUrl): ApprovedClientAppsRequestBuilder {
        return new ApprovedClientAppsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
