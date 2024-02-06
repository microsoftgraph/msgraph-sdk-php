<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\TransitiveMemberOf\Item\GraphAdministrativeUnit;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AdministrativeUnit;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to administrativeUnit.
*/
class GraphAdministrativeUnitRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GraphAdministrativeUnitRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/transitiveMemberOf/{directoryObject%2Did}/graph.administrativeUnit{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the item of type microsoft.graph.directoryObject as microsoft.graph.administrativeUnit
     * @param GraphAdministrativeUnitRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdministrativeUnit|null>
     * @throws Exception
    */
    public function get(?GraphAdministrativeUnitRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdministrativeUnit::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the item of type microsoft.graph.directoryObject as microsoft.graph.administrativeUnit
     * @param GraphAdministrativeUnitRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphAdministrativeUnitRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphAdministrativeUnitRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphAdministrativeUnitRequestBuilder {
        return new GraphAdministrativeUnitRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
