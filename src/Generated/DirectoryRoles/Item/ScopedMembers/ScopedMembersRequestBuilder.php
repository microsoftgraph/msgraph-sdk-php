<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item\ScopedMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DirectoryRoles\Item\ScopedMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\ScopedMembers\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ScopedRoleMembership;
use Microsoft\Graph\Generated\Models\ScopedRoleMembershipCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scopedMembers property of the microsoft.graph.directoryRole entity.
*/
class ScopedMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the scopedMembers property of the microsoft.graph.directoryRole entity.
     * @param string $scopedRoleMembershipId The unique identifier of scopedRoleMembership
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function byScopedRoleMembershipId(string $scopedRoleMembershipId): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $scopedRoleMembershipId;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ScopedMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directoryRoles/{directoryRole%2Did}/scopedMembers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of scopedRoleMembership objects for a directory role.
     * @param ScopedMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScopedRoleMembershipCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directoryrole-list-scopedmembers?view=graph-rest-1.0 Find more info here
    */
    public function get(?ScopedMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ScopedRoleMembershipCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to scopedMembers for directoryRoles
     * @param ScopedRoleMembership $body The request body
     * @param ScopedMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScopedRoleMembership|null>
     * @throws Exception
    */
    public function post(ScopedRoleMembership $body, ?ScopedMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ScopedRoleMembership::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of scopedRoleMembership objects for a directory role.
     * @param ScopedMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScopedMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to scopedMembers for directoryRoles
     * @param ScopedRoleMembership $body The request body
     * @param ScopedMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ScopedRoleMembership $body, ?ScopedMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/directoryRoles/{directoryRole%2Did}/scopedMembers';
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
     * @return ScopedMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): ScopedMembersRequestBuilder {
        return new ScopedMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
