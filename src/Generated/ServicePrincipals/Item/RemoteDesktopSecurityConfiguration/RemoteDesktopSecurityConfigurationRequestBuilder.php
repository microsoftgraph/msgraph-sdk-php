<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RemoteDesktopSecurityConfiguration;
use Microsoft\Graph\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration\TargetDeviceGroups\TargetDeviceGroupsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the remoteDesktopSecurityConfiguration property of the microsoft.graph.servicePrincipal entity.
*/
class RemoteDesktopSecurityConfigurationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the targetDeviceGroups property of the microsoft.graph.remoteDesktopSecurityConfiguration entity.
    */
    public function targetDeviceGroups(): TargetDeviceGroupsRequestBuilder {
        return new TargetDeviceGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new RemoteDesktopSecurityConfigurationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/remoteDesktopSecurityConfiguration{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a remoteDesktopSecurityConfiguration object on a servicePrincipal. Removing remoteDesktopSecurityConfiguration object on the servicePrincipal disables the Microsoft Entra ID Remote Desktop Services (RDS) authentication protocol to authenticate a user to Microsoft Entra joined or Microsoft Entra hybrid joined devices, and removes any target device groups that you configured for SSO.
     * @param RemoteDesktopSecurityConfigurationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceprincipal-delete-remotedesktopsecurityconfiguration?view=graph-rest-1.0 Find more info here
    */
    public function delete(?RemoteDesktopSecurityConfigurationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a remoteDesktopSecurityConfiguration object on a servicePrincipal. Use this configuration to view the Microsoft Entra ID Remote Desktop Services (RDS) authentication protocol to authenticate a user to Microsoft Entra joined or Microsoft Entra hybrid joined devices. Additionally you can view any targetDeviceGroups that have been configured for SSO.
     * @param RemoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RemoteDesktopSecurityConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/remotedesktopsecurityconfiguration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?RemoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RemoteDesktopSecurityConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a remoteDesktopSecurityConfiguration object on the servicePrincipal. Use this configuration to enable or disable the Microsoft Entra ID Remote Desktop Services (RDS) authentication protocol to authenticate a user to Microsoft Entra joined or Microsoft Entra hybrid joined devices.
     * @param RemoteDesktopSecurityConfiguration $body The request body
     * @param RemoteDesktopSecurityConfigurationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RemoteDesktopSecurityConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/remotedesktopsecurityconfiguration-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(RemoteDesktopSecurityConfiguration $body, ?RemoteDesktopSecurityConfigurationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RemoteDesktopSecurityConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a remoteDesktopSecurityConfiguration object on a servicePrincipal. Removing remoteDesktopSecurityConfiguration object on the servicePrincipal disables the Microsoft Entra ID Remote Desktop Services (RDS) authentication protocol to authenticate a user to Microsoft Entra joined or Microsoft Entra hybrid joined devices, and removes any target device groups that you configured for SSO.
     * @param RemoteDesktopSecurityConfigurationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?RemoteDesktopSecurityConfigurationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a remoteDesktopSecurityConfiguration object on a servicePrincipal. Use this configuration to view the Microsoft Entra ID Remote Desktop Services (RDS) authentication protocol to authenticate a user to Microsoft Entra joined or Microsoft Entra hybrid joined devices. Additionally you can view any targetDeviceGroups that have been configured for SSO.
     * @param RemoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RemoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a remoteDesktopSecurityConfiguration object on the servicePrincipal. Use this configuration to enable or disable the Microsoft Entra ID Remote Desktop Services (RDS) authentication protocol to authenticate a user to Microsoft Entra joined or Microsoft Entra hybrid joined devices.
     * @param RemoteDesktopSecurityConfiguration $body The request body
     * @param RemoteDesktopSecurityConfigurationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(RemoteDesktopSecurityConfiguration $body, ?RemoteDesktopSecurityConfigurationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RemoteDesktopSecurityConfigurationRequestBuilder
    */
    public function withUrl(string $rawUrl): RemoteDesktopSecurityConfigurationRequestBuilder {
        return new RemoteDesktopSecurityConfigurationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
