<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Catalog\ResourceScopes\Item\Resource\Roles\Item\Resource\ExternalOriginResourceConnector;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ExternalOriginResourceConnector;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalOriginResourceConnector property of the microsoft.graph.accessPackageResource entity.
*/
class ExternalOriginResourceConnectorRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExternalOriginResourceConnectorRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/resourceRequests/{accessPackageResourceRequest%2Did}/catalog/resourceScopes/{accessPackageResourceScope%2Did}/resource/roles/{accessPackageResourceRole%2Did}/resource/externalOriginResourceConnector{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The connector that integrates with external origin systems to provision access to resources from those systems. Read-only. Nullable.
     * @param ExternalOriginResourceConnectorRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnector|null>
     * @throws Exception
    */
    public function get(?ExternalOriginResourceConnectorRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The connector that integrates with external origin systems to provision access to resources from those systems. Read-only. Nullable.
     * @param ExternalOriginResourceConnectorRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalOriginResourceConnectorRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExternalOriginResourceConnectorRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalOriginResourceConnectorRequestBuilder {
        return new ExternalOriginResourceConnectorRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
