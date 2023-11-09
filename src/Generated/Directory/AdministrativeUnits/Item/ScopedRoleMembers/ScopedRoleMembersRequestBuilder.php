<?php

namespace Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\ScopedRoleMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\ScopedRoleMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\ScopedRoleMembers\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ScopedRoleMembership;
use Microsoft\Graph\Generated\Models\ScopedRoleMembershipCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scopedRoleMembers property of the microsoft.graph.administrativeUnit entity.
*/
class ScopedRoleMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the scopedRoleMembers property of the microsoft.graph.administrativeUnit entity.
     * @param string $scopedRoleMembershipId The unique identifier of scopedRoleMembership
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function byScopedRoleMembershipId(string $scopedRoleMembershipId): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $scopedRoleMembershipId;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ScopedRoleMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/administrativeUnits/{administrativeUnit%2Did}/scopedRoleMembers{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List Microsoft Entra role assignments with administrative unit scope. This API is available in the following national cloud deployments.
     * @param ScopedRoleMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScopedRoleMembershipCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/administrativeunit-list-scopedrolemembers?view=graph-rest-1.0 Find more info here
    */
    public function get(?ScopedRoleMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ScopedRoleMembershipCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Assign a Microsoft Entra role with administrative unit scope. For a list of roles that can be assigned with administrative unit scope, see Assign Microsoft Entra roles with administrative unit scope. This API is available in the following national cloud deployments.
     * @param ScopedRoleMembership $body The request body
     * @param ScopedRoleMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScopedRoleMembership|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/administrativeunit-post-scopedrolemembers?view=graph-rest-1.0 Find more info here
    */
    public function post(ScopedRoleMembership $body, ?ScopedRoleMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ScopedRoleMembership::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List Microsoft Entra role assignments with administrative unit scope. This API is available in the following national cloud deployments.
     * @param ScopedRoleMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScopedRoleMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Assign a Microsoft Entra role with administrative unit scope. For a list of roles that can be assigned with administrative unit scope, see Assign Microsoft Entra roles with administrative unit scope. This API is available in the following national cloud deployments.
     * @param ScopedRoleMembership $body The request body
     * @param ScopedRoleMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ScopedRoleMembership $body, ?ScopedRoleMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ScopedRoleMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): ScopedRoleMembersRequestBuilder {
        return new ScopedRoleMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
