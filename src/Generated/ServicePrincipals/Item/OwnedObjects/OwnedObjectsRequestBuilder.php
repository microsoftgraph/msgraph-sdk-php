<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\GraphApplication\GraphApplicationRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\GraphAppRoleAssignment\GraphAppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\GraphEndpoint\GraphEndpointRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\GraphGroup\GraphGroupRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\GraphServicePrincipal\GraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the ownedObjects property of the microsoft.graph.servicePrincipal entity.
*/
class OwnedObjectsRequestBuilder extends BaseRequestBuilder 
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
     * Casts the previous resource to group.
    */
    public function graphGroup(): GraphGroupRequestBuilder {
        return new GraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder {
        return new GraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.servicePrincipal entity.
     * @param string $directoryObjectId The unique identifier of directoryObject
     * @return DirectoryObjectItemRequestBuilder
    */
    public function byDirectoryObjectId(string $directoryObjectId): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $directoryObjectId;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OwnedObjectsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/ownedObjects{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of objects owned by the servicePrincipal.  This could include applications or groups.
     * @param OwnedObjectsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryObjectCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceprincipal-list-ownedobjects?view=graph-rest-1.0 Find more info here
    */
    public function get(?OwnedObjectsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of objects owned by the servicePrincipal.  This could include applications or groups.
     * @param OwnedObjectsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OwnedObjectsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OwnedObjectsRequestBuilder
    */
    public function withUrl(string $rawUrl): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
