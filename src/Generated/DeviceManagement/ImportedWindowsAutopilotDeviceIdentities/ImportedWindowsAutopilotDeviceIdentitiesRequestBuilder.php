<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Import\ImportRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Item\ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ImportedWindowsAutopilotDeviceIdentity;
use Microsoft\Graph\Generated\Models\ImportedWindowsAutopilotDeviceIdentityCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the importedWindowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
*/
class ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the import method.
    */
    public function import(): ImportRequestBuilder {
        return new ImportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the importedWindowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
     * @param string $importedWindowsAutopilotDeviceIdentityId The unique identifier of importedWindowsAutopilotDeviceIdentity
     * @return ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder
    */
    public function byImportedWindowsAutopilotDeviceIdentityId(string $importedWindowsAutopilotDeviceIdentityId): ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['importedWindowsAutopilotDeviceIdentity%2Did'] = $importedWindowsAutopilotDeviceIdentityId;
        return new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/importedWindowsAutopilotDeviceIdentities{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the importedWindowsAutopilotDeviceIdentity objects.
     * @param ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImportedWindowsAutopilotDeviceIdentityCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-importedwindowsautopilotdeviceidentity-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImportedWindowsAutopilotDeviceIdentityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new importedWindowsAutopilotDeviceIdentity object.
     * @param ImportedWindowsAutopilotDeviceIdentity $body The request body
     * @param ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImportedWindowsAutopilotDeviceIdentity|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-importedwindowsautopilotdeviceidentity-create?view=graph-rest-1.0 Find more info here
    */
    public function post(ImportedWindowsAutopilotDeviceIdentity $body, ?ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the importedWindowsAutopilotDeviceIdentity objects.
     * @param ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new importedWindowsAutopilotDeviceIdentity object.
     * @param ImportedWindowsAutopilotDeviceIdentity $body The request body
     * @param ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ImportedWindowsAutopilotDeviceIdentity $body, ?ImportedWindowsAutopilotDeviceIdentitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/importedWindowsAutopilotDeviceIdentities';
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
     * @return ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
