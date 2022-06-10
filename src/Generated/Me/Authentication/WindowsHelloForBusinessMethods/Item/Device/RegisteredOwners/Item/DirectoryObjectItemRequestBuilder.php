<?php

namespace Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item;

use Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\AppRoleAssignment\AppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\Endpoint\EndpointRequestBuilder;
use Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\Ref\RefRequestBuilder;
use Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\ServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\User\UserRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class DirectoryObjectItemRequestBuilder 
{
    /**
     * The appRoleAssignment property
    */
    public function appRoleAssignment(): AppRoleAssignmentRequestBuilder {
        return new AppRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The endpoint property
    */
    public function endpoint(): EndpointRequestBuilder {
        return new EndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The ref property
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The servicePrincipal property
    */
    public function servicePrincipal(): ServicePrincipalRequestBuilder {
        return new ServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The user property
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
        $this->urlTemplate = '{+baseurl}/me/authentication/windowsHelloForBusinessMethods/{windowsHelloForBusinessAuthenticationMethod%2Did}/device/registeredOwners/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
