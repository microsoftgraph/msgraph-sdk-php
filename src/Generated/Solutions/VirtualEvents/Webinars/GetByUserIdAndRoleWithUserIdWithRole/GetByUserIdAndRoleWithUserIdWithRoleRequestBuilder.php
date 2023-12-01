<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\GetByUserIdAndRoleWithUserIdWithRole;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getByUserIdAndRole method.
*/
class GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $role Usage: role='{role}'
     * @param string|null $userId Usage: userId='{userId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $role = null, ?string $userId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/webinars/getByUserIdAndRole(userId=\'{userId}\',role=\'{role}\'){?%24top,%24skip,%24search,%24filter,%24count,%24select,%24orderby}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['role'] = $role;
            $urlTplParams['userId'] = $userId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getByUserIdAndRole
     * @param GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetByUserIdAndRoleWithUserIdWithRoleGetResponse|null>
     * @throws Exception
    */
    public function get(?GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetByUserIdAndRoleWithUserIdWithRoleGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getByUserIdAndRole
     * @param GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder
    */
    public function withUrl(string $rawUrl): GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder {
        return new GetByUserIdAndRoleWithUserIdWithRoleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
