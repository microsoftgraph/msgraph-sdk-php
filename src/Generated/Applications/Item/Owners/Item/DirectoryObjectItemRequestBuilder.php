<?php

namespace Microsoft\Graph\Generated\Applications\Item\Owners\Item;

use Microsoft\Graph\Generated\Applications\Item\Owners\Item\MicrosoftGraphAppRoleAssignment\MicrosoftGraphAppRoleAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Owners\Item\MicrosoftGraphEndpoint\MicrosoftGraphEndpointRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Owners\Item\MicrosoftGraphServicePrincipal\MicrosoftGraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Owners\Item\MicrosoftGraphUser\MicrosoftGraphUserRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Owners\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /applications/{application-id}/owners/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to appRoleAssignment.
    */
    public function microsoftGraphAppRoleAssignment(): MicrosoftGraphAppRoleAssignmentRequestBuilder {
        return new MicrosoftGraphAppRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to endpoint.
    */
    public function microsoftGraphEndpoint(): MicrosoftGraphEndpointRequestBuilder {
        return new MicrosoftGraphEndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function microsoftGraphServicePrincipal(): MicrosoftGraphServicePrincipalRequestBuilder {
        return new MicrosoftGraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function microsoftGraphUser(): MicrosoftGraphUserRequestBuilder {
        return new MicrosoftGraphUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of application entities.
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/applications/{application%2Did}/owners/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
