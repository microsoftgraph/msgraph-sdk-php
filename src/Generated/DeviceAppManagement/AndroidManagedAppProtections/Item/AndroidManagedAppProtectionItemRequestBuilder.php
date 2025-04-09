<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item\Apps\AppsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item\DeploymentSummary\DeploymentSummaryRequestBuilder;
use Microsoft\Graph\Generated\Models\AndroidManagedAppProtection;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
*/
class AndroidManagedAppProtectionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the apps property of the microsoft.graph.androidManagedAppProtection entity.
    */
    public function apps(): AppsRequestBuilder {
        return new AppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.targetedManagedAppProtection entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deploymentSummary property of the microsoft.graph.androidManagedAppProtection entity.
    */
    public function deploymentSummary(): DeploymentSummaryRequestBuilder {
        return new DeploymentSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AndroidManagedAppProtectionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/androidManagedAppProtections/{androidManagedAppProtection%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a androidManagedAppProtection.
     * @param AndroidManagedAppProtectionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-androidmanagedappprotection-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?AndroidManagedAppProtectionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the androidManagedAppProtection object.
     * @param AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidManagedAppProtection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-androidmanagedappprotection-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidManagedAppProtection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a androidManagedAppProtection object.
     * @param AndroidManagedAppProtection $body The request body
     * @param AndroidManagedAppProtectionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidManagedAppProtection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-androidmanagedappprotection-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(AndroidManagedAppProtection $body, ?AndroidManagedAppProtectionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidManagedAppProtection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a androidManagedAppProtection.
     * @param AndroidManagedAppProtectionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AndroidManagedAppProtectionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Read properties and relationships of the androidManagedAppProtection object.
     * @param AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidManagedAppProtectionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a androidManagedAppProtection object.
     * @param AndroidManagedAppProtection $body The request body
     * @param AndroidManagedAppProtectionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AndroidManagedAppProtection $body, ?AndroidManagedAppProtectionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AndroidManagedAppProtectionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidManagedAppProtectionItemRequestBuilder {
        return new AndroidManagedAppProtectionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
