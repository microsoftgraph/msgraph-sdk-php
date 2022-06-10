<?php

namespace Microsoft\Graph\Groups\Item\Members\Item;

use Microsoft\Graph\Groups\Item\Members\Item\Application\ApplicationRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\Device\DeviceRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\OrgContact\OrgContactRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\Ref\RefRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\ServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\User\UserRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class DirectoryObjectItemRequestBuilder 
{
    /**
     * The application property
    */
    public function application(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The device property
    */
    public function device(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The group property
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The orgContact property
    */
    public function orgContact(): OrgContactRequestBuilder {
        return new OrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/members/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
