<?php

namespace Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item;

use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\GraphAppRoleAssignment\GraphAppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\GraphEndpoint\GraphEndpointRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\GraphServicePrincipal\GraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\GraphUser\GraphUserRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /devices/{device-id}/registeredOwners/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder extends BaseRequestBuilder 
{
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
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/devices/{device%2Did}/registeredOwners/{directoryObject%2Did}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
