<?php

namespace Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item;

use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphApplication\GraphApplicationRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphDevice\GraphDeviceRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphGroup\GraphGroupRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphOrgContact\GraphOrgContactRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphServicePrincipal\GraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphUser\GraphUserRequestBuilder;
use Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /directory/administrativeUnits/{administrativeUnit-id}/members/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of directory entities.
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
        $this->urlTemplate = '{+baseurl}/directory/administrativeUnits/{administrativeUnit%2Did}/members/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
