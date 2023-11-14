<?php

namespace Microsoft\Graph\Generated\Directory\AdministrativeUnits;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\AdministrativeUnitItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AdministrativeUnit;
use Microsoft\Graph\Generated\Models\AdministrativeUnitCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the administrativeUnits property of the microsoft.graph.directory entity.
*/
class AdministrativeUnitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the administrativeUnits property of the microsoft.graph.directory entity.
     * @param string $administrativeUnitId The unique identifier of administrativeUnit
     * @return AdministrativeUnitItemRequestBuilder
    */
    public function byAdministrativeUnitId(string $administrativeUnitId): AdministrativeUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['administrativeUnit%2Did'] = $administrativeUnitId;
        return new AdministrativeUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AdministrativeUnitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/administrativeUnits{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of administrativeUnit objects. This API is available in the following national cloud deployments.
     * @param AdministrativeUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdministrativeUnitCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-list-administrativeunits?view=graph-rest-1.0 Find more info here
    */
    public function get(?AdministrativeUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdministrativeUnitCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Use this API to create a new administrativeUnit. This API is available in the following national cloud deployments.
     * @param AdministrativeUnit $body The request body
     * @param AdministrativeUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdministrativeUnit|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-post-administrativeunits?view=graph-rest-1.0 Find more info here
    */
    public function post(AdministrativeUnit $body, ?AdministrativeUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdministrativeUnit::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of administrativeUnit objects. This API is available in the following national cloud deployments.
     * @param AdministrativeUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdministrativeUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Use this API to create a new administrativeUnit. This API is available in the following national cloud deployments.
     * @param AdministrativeUnit $body The request body
     * @param AdministrativeUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AdministrativeUnit $body, ?AdministrativeUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AdministrativeUnitsRequestBuilder
    */
    public function withUrl(string $rawUrl): AdministrativeUnitsRequestBuilder {
        return new AdministrativeUnitsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
