<?php

namespace Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item;

use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\AppRoleAssignment\AppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\Endpoint\EndpointRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\Ref\RefRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\ServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\User\UserRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to appRoleAssignment.
    */
    public function appRoleAssignment(): AppRoleAssignmentRequestBuilder {
        return new AppRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to endpoint.
    */
    public function endpoint(): EndpointRequestBuilder {
        return new EndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of device entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function servicePrincipal(): ServicePrincipalRequestBuilder {
        return new ServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Casts the previous resource to user.
    */
    public function user(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/devices/{device%2Did}/registeredOwners/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}