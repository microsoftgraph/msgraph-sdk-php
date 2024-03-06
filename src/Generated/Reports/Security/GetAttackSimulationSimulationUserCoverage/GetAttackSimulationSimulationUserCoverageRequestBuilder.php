<?php

namespace Microsoft\Graph\Generated\Reports\Security\GetAttackSimulationSimulationUserCoverage;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getAttackSimulationSimulationUserCoverage method.
*/
class GetAttackSimulationSimulationUserCoverageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetAttackSimulationSimulationUserCoverageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/security/getAttackSimulationSimulationUserCoverage(){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getAttackSimulationSimulationUserCoverage
     * @param GetAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetAttackSimulationSimulationUserCoverageGetResponse|null>
     * @throws Exception
    */
    public function get(?GetAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetAttackSimulationSimulationUserCoverageGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getAttackSimulationSimulationUserCoverage
     * @param GetAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetAttackSimulationSimulationUserCoverageRequestBuilder
    */
    public function withUrl(string $rawUrl): GetAttackSimulationSimulationUserCoverageRequestBuilder {
        return new GetAttackSimulationSimulationUserCoverageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
