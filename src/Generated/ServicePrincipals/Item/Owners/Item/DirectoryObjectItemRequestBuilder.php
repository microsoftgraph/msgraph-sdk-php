<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item;

use Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\MicrosoftGraphAppRoleAssignment\AppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\MicrosoftGraphEndpoint\EndpointRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\MicrosoftGraphServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\MicrosoftGraphUser\UserRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /servicePrincipals/{servicePrincipal-id}/owners/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to appRoleAssignment.
    */
    public function microsoftGraphAppRoleAssignment(): AppRoleAssignmentRequestBuilder {
        return new AppRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to endpoint.
    */
    public function microsoftGraphEndpoint(): EndpointRequestBuilder {
        return new EndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function microsoftGraphServicePrincipal(): ServicePrincipalRequestBuilder {
        return new ServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function microsoftGraphUser(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of servicePrincipal entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $directoryObjectId key: id of directoryObject
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $directoryObjectId = null) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/owners/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['directoryObjectId'] = $directoryObjectId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}
