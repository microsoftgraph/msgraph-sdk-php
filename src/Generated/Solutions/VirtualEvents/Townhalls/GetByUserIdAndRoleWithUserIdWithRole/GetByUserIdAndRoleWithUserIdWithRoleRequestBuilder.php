<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Townhalls\GetByUserIdAndRoleWithUserIdWithRole;

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
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/townhalls/getByUserIdAndRole(userId=\'{userId}\',role=\'{role}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
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
     * Get a list of virtualEventTownhall objects where the specified user is either the organizer or a coorganizer.
     * @param GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetByUserIdAndRoleWithUserIdWithRolegetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualeventtownhall-getbyuseridandrole?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetByUserIdAndRoleWithUserIdWithRolegetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of virtualEventTownhall objects where the specified user is either the organizer or a coorganizer.
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
