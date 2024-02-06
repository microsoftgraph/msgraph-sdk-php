<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Apps\AppsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\DeploymentSummary\DeploymentSummaryRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\TargetApps\TargetAppsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TargetedManagedAppConfiguration;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the targetedManagedAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
*/
class TargetedManagedAppConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the apps property of the microsoft.graph.targetedManagedAppConfiguration entity.
    */
    public function apps(): AppsRequestBuilder {
        return new AppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.targetedManagedAppConfiguration entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deploymentSummary property of the microsoft.graph.targetedManagedAppConfiguration entity.
    */
    public function deploymentSummary(): DeploymentSummaryRequestBuilder {
        return new DeploymentSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the targetApps method.
    */
    public function targetApps(): TargetAppsRequestBuilder {
        return new TargetAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TargetedManagedAppConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/targetedManagedAppConfigurations/{targetedManagedAppConfiguration%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a targetedManagedAppConfiguration.
     * @param TargetedManagedAppConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-targetedmanagedappconfiguration-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?TargetedManagedAppConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the targetedManagedAppConfiguration object.
     * @param TargetedManagedAppConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TargetedManagedAppConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-targetedmanagedappconfiguration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?TargetedManagedAppConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TargetedManagedAppConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a targetedManagedAppConfiguration object.
     * @param TargetedManagedAppConfiguration $body The request body
     * @param TargetedManagedAppConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TargetedManagedAppConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-targetedmanagedappconfiguration-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(TargetedManagedAppConfiguration $body, ?TargetedManagedAppConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TargetedManagedAppConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a targetedManagedAppConfiguration.
     * @param TargetedManagedAppConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TargetedManagedAppConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the targetedManagedAppConfiguration object.
     * @param TargetedManagedAppConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TargetedManagedAppConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a targetedManagedAppConfiguration object.
     * @param TargetedManagedAppConfiguration $body The request body
     * @param TargetedManagedAppConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TargetedManagedAppConfiguration $body, ?TargetedManagedAppConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TargetedManagedAppConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TargetedManagedAppConfigurationItemRequestBuilder {
        return new TargetedManagedAppConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
