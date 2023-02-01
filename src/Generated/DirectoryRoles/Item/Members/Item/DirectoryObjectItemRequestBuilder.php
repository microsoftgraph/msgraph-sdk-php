<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item;

use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphApplication\ApplicationRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphDevice\DeviceRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphGroup\GroupRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphOrgContact\OrgContactRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphUser\UserRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /directoryRoles/{directoryRole-id}/members/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to application.
    */
    public function microsoftGraphApplication(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to device.
    */
    public function microsoftGraphDevice(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function microsoftGraphGroup(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to orgContact.
    */
    public function microsoftGraphOrgContact(): OrgContactRequestBuilder {
        return new OrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        $this->urlTemplate = '{+baseurl}/directoryRoles/{directoryRole%2Did}/members/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['directoryObjectId'] = $directoryObjectId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}
