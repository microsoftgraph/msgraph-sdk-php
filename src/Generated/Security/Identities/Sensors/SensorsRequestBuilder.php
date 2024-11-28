<?php

namespace Microsoft\Graph\Generated\Security\Identities\Sensors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\Sensor;
use Microsoft\Graph\Generated\Models\Security\SensorCollectionResponse;
use Microsoft\Graph\Generated\Security\Identities\Sensors\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Identities\Sensors\Item\SensorItemRequestBuilder;
use Microsoft\Graph\Generated\Security\Identities\Sensors\MicrosoftGraphSecurityGetDeploymentAccessKey\MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder;
use Microsoft\Graph\Generated\Security\Identities\Sensors\MicrosoftGraphSecurityGetDeploymentPackageUri\MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder;
use Microsoft\Graph\Generated\Security\Identities\Sensors\MicrosoftGraphSecurityRegenerateDeploymentAccessKey\MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sensors property of the microsoft.graph.security.identityContainer entity.
*/
class SensorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeploymentAccessKey method.
    */
    public function microsoftGraphSecurityGetDeploymentAccessKey(): MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder {
        return new MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeploymentPackageUri method.
    */
    public function microsoftGraphSecurityGetDeploymentPackageUri(): MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder {
        return new MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the regenerateDeploymentAccessKey method.
    */
    public function microsoftGraphSecurityRegenerateDeploymentAccessKey(): MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder {
        return new MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensors property of the microsoft.graph.security.identityContainer entity.
     * @param string $sensorId The unique identifier of sensor
     * @return SensorItemRequestBuilder
    */
    public function bySensorId(string $sensorId): SensorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensor%2Did'] = $sensorId;
        return new SensorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SensorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/identities/sensors{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of sensor objects and their properties.
     * @param SensorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensorCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-identitycontainer-list-sensors?view=graph-rest-1.0 Find more info here
    */
    public function get(?SensorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sensors for security
     * @param Sensor $body The request body
     * @param SensorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Sensor|null>
     * @throws Exception
    */
    public function post(Sensor $body, ?SensorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Sensor::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of sensor objects and their properties.
     * @param SensorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SensorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sensors for security
     * @param Sensor $body The request body
     * @param SensorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Sensor $body, ?SensorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SensorsRequestBuilder
    */
    public function withUrl(string $rawUrl): SensorsRequestBuilder {
        return new SensorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
