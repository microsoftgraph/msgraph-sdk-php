<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_de2a04b0;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the additionalAccess method. Original name: additionalAccessWithAccessPackageIdWithIncompatibleAccessPackageIdRequestBuilder
*/
class AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_5f00a31b extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_5f00a31b and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $accessPackageId Usage: accessPackageId='{accessPackageId}'
     * @param string|null $incompatibleAccessPackageId Usage: incompatibleAccessPackageId='{incompatibleAccessPackageId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $accessPackageId = null, ?string $incompatibleAccessPackageId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/assignments/additionalAccess(accessPackageId=\'{accessPackageId}\',incompatibleAccessPackageId=\'{incompatibleAccessPackageId}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['accessPackageId'] = $accessPackageId;
            $urlTplParams['incompatibleAccessPackageId'] = $incompatibleAccessPackageId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function additionalAccess
     * @param AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_aa4dab92|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_33faf992|null>
     * @throws Exception
    */
    public function get(?AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_aa4dab92 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_33faf992::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function additionalAccess
     * @param AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_aa4dab92|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_aa4dab92 $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_5f00a31b
    */
    public function withUrl(string $rawUrl): AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_5f00a31b {
        return new AdditionalAccessWithAccessPackageIdWithIncompatibleAcce_5f00a31b($rawUrl, $this->requestAdapter);
    }

}
