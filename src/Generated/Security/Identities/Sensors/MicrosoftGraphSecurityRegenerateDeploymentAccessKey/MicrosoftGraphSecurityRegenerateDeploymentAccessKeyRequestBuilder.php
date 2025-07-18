<?php

namespace Microsoft\Graph\Generated\Security\Identities\Sensors\MicrosoftGraphSecurityRegenerateDeploymentAccessKey;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\DeploymentAccessKeyType;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the regenerateDeploymentAccessKey method.
*/
class MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/identities/sensors/microsoft.graph.security.regenerateDeploymentAccessKey');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Generate a new deployment access key that can be used to install a sensor associated with the workspace.
     * @param MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeploymentAccessKeyType|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-sensor-regeneratedeploymentaccesskey?view=graph-rest-1.0 Find more info here
    */
    public function post(?MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeploymentAccessKeyType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Generate a new deployment access key that can be used to install a sensor associated with the workspace.
     * @param MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder {
        return new MicrosoftGraphSecurityRegenerateDeploymentAccessKeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
