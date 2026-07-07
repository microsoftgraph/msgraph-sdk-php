<?php

namespace Microsoft\Graph\Generated\Security\Identities\Sensors\MicrosoftGraphSecurityGetDeploymentAccessKey;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\DeploymentAccessKeyType;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getDeploymentAccessKey method.
*/
class MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/identities/sensors/microsoft.graph.security.getDeploymentAccessKey()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the deployment access key for Microsoft Defender for Identity that is required to install sensors associated with the workspace.
     * @param MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeploymentAccessKeyType|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeploymentAccessKeyType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the deployment access key for Microsoft Defender for Identity that is required to install sensors associated with the workspace.
     * @param MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder {
        return new MicrosoftGraphSecurityGetDeploymentAccessKeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
