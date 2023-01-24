<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item;

use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\Application\ApplicationRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\Device\DeviceRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\OrgContact\OrgContactRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\Ref\RefRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\ServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\User\UserRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /directoryRoles/{directoryRole-id}/members/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to application.
    */
    public function application(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to device.
    */
    public function device(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to orgContact.
    */
    public function orgContact(): OrgContactRequestBuilder {
        return new OrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of directoryRole entities.
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
        $this->urlTemplate = '{+baseurl}/directoryRoles/{directoryRole%2Did}/members/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
