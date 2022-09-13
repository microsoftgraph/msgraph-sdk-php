<?php

namespace Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Application\ApplicationRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Device\DeviceRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\OrgContact\OrgContactRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\ServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\User\UserRequestBuilder;
use Microsoft\Graph\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class TransitiveMemberOfRequestBuilder 
{
    /**
     * The application property
    */
    public function application(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The Count property
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new TransitiveMemberOfRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/authentication/microsoftAuthenticatorMethods/{microsoftAuthenticatorAuthenticationMethod%2Did}/device/transitiveMemberOf{?%24top*,%24skip*,%24search*,%24filter*,%24count*,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @param TransitiveMemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?TransitiveMemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @param TransitiveMemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?TransitiveMemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
