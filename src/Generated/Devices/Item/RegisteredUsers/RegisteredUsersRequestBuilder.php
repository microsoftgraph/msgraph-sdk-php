<?php

namespace Microsoft\Graph\Generated\Devices\Item\RegisteredUsers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\GraphAppRoleAssignment\GraphAppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\GraphEndpoint\GraphEndpointRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\GraphServicePrincipal\GraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\GraphUser\GraphUserRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\Ref\RefRequestBuilder;
use Microsoft\Graph\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the registeredUsers property of the microsoft.graph.device entity.
*/
class RegisteredUsersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to appRoleAssignment.
    */
    public function graphAppRoleAssignment(): GraphAppRoleAssignmentRequestBuilder {
        return new GraphAppRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to endpoint.
    */
    public function graphEndpoint(): GraphEndpointRequestBuilder {
        return new GraphEndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the collection of device entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Generated.devices.item.registeredUsers.item collection
     * @param string $directoryObjectId The unique identifier of directoryObject
     * @return DirectoryObjectItemRequestBuilder
    */
    public function byDirectoryObjectId(string $directoryObjectId): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $directoryObjectId;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RegisteredUsersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/devices/{device%2Did}/registeredUsers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     * @param RegisteredUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryObjectCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/device-list-registeredusers?view=graph-rest-1.0 Find more info here
    */
    public function get(?RegisteredUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     * @param RegisteredUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RegisteredUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RegisteredUsersRequestBuilder
    */
    public function withUrl(string $rawUrl): RegisteredUsersRequestBuilder {
        return new RegisteredUsersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
