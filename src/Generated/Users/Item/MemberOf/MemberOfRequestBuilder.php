<?php

namespace Microsoft\Graph\Generated\Users\Item\MemberOf;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\MemberOf\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MemberOf\GraphAdministrativeUnit\GraphAdministrativeUnitRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MemberOf\GraphDirectoryRole\GraphDirectoryRoleRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MemberOf\GraphGroup\GraphGroupRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the memberOf property of the microsoft.graph.user entity.
*/
class MemberOfRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to administrativeUnit.
    */
    public function graphAdministrativeUnit(): GraphAdministrativeUnitRequestBuilder {
        return new GraphAdministrativeUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to directoryRole.
    */
    public function graphDirectoryRole(): GraphDirectoryRoleRequestBuilder {
        return new GraphDirectoryRoleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function graphGroup(): GraphGroupRequestBuilder {
        return new GraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.user entity.
     * @param string $directoryObjectId The unique identifier of directoryObject
     * @return DirectoryObjectItemRequestBuilder
    */
    public function byDirectoryObjectId(string $directoryObjectId): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $directoryObjectId;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MemberOfRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/memberOf{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand.
     * @param MemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryObjectCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-list-memberof?view=graph-rest-1.0 Find more info here
    */
    public function get(?MemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand.
     * @param MemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MemberOfRequestBuilder
    */
    public function withUrl(string $rawUrl): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
