<?php

namespace Microsoft\Graph\Generated\Security\Identities\Sensors\MicrosoftGraphSecurityGetDeploymentPackageUri;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\SensorDeploymentPackage;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getDeploymentPackageUri method.
*/
class MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/identities/sensors/microsoft.graph.security.getDeploymentPackageUri()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the sensor deployment package URL and version. You can use this URL to download the installer to install the sensor on a server.
     * @param MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensorDeploymentPackage|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-sensor-getdeploymentpackageuri?view=graph-rest-1.0 Find more info here
    */
    public function get(?MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensorDeploymentPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the sensor deployment package URL and version. You can use this URL to download the installer to install the sensor on a server.
     * @param MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder {
        return new MicrosoftGraphSecurityGetDeploymentPackageUriRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
