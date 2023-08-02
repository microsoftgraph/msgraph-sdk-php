<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item\Members;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\GraphApplication\GraphApplicationRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\GraphDevice\GraphDeviceRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\GraphGroup\GraphGroupRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\GraphOrgContact\GraphOrgContactRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\GraphServicePrincipal\GraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\GraphUser\GraphUserRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Ref\RefRequestBuilder;
use Microsoft\Graph\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the members property of the microsoft.graph.directoryRole entity.
*/
class MembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to application.
    */
    public function graphApplication(): GraphApplicationRequestBuilder {
        return new GraphApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to device.
    */
    public function graphDevice(): GraphDeviceRequestBuilder {
        return new GraphDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function graphGroup(): GraphGroupRequestBuilder {
        return new GraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to orgContact.
    */
    public function graphOrgContact(): GraphOrgContactRequestBuilder {
        return new GraphOrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder {
        return new GraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function graphUser(): GraphUserRequestBuilder {
        return new GraphUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryRole entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Generated.directoryRoles.item.members.item collection
     * @param string $directoryObjectId Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function byDirectoryObjectId(string $directoryObjectId): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $directoryObjectId;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directoryRoles/{directoryRole%2Did}/members{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     * @param MembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/directoryrole-list-members?view=graph-rest-1.0 Find more info here
    */
    public function get(?MembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     * @param MembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

}
