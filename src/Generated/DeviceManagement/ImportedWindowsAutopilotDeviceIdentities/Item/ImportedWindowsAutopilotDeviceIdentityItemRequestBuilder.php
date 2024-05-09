<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ImportedWindowsAutopilotDeviceIdentity;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the importedWindowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
*/
class ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/importedWindowsAutopilotDeviceIdentities/{importedWindowsAutopilotDeviceIdentity%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a importedWindowsAutopilotDeviceIdentity.
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-importedwindowsautopilotdeviceidentity-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the importedWindowsAutopilotDeviceIdentity object.
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImportedWindowsAutopilotDeviceIdentity|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-importedwindowsautopilotdeviceidentity-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property importedWindowsAutopilotDeviceIdentities in deviceManagement
     * @param ImportedWindowsAutopilotDeviceIdentity $body The request body
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImportedWindowsAutopilotDeviceIdentity|null>
     * @throws Exception
    */
    public function patch(ImportedWindowsAutopilotDeviceIdentity $body, ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a importedWindowsAutopilotDeviceIdentity.
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the importedWindowsAutopilotDeviceIdentity object.
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property importedWindowsAutopilotDeviceIdentities in deviceManagement
     * @param ImportedWindowsAutopilotDeviceIdentity $body The request body
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ImportedWindowsAutopilotDeviceIdentity $body, ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder {
        return new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
