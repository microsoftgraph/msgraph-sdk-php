<?php

namespace Microsoft\Graph\Generated\TenantRelationships\FindTenantInformationByDomainNameWithDomainName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TenantInformation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the findTenantInformationByDomainName method.
*/
class FindTenantInformationByDomainNameWithDomainNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FindTenantInformationByDomainNameWithDomainNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $domainName Usage: domainName='{domainName}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $domainName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/findTenantInformationByDomainName(domainName=\'{domainName}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['domainName'] = $domainName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function findTenantInformationByDomainName
     * @param FindTenantInformationByDomainNameWithDomainNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantInformation|null>
     * @throws Exception
    */
    public function get(?FindTenantInformationByDomainNameWithDomainNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function findTenantInformationByDomainName
     * @param FindTenantInformationByDomainNameWithDomainNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FindTenantInformationByDomainNameWithDomainNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FindTenantInformationByDomainNameWithDomainNameRequestBuilder
    */
    public function withUrl(string $rawUrl): FindTenantInformationByDomainNameWithDomainNameRequestBuilder {
        return new FindTenantInformationByDomainNameWithDomainNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
