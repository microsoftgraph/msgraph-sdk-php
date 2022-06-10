<?php

namespace Microsoft\Graph\Applications\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Applications\Item\AddKey\AddKeyRequestBuilder;
use Microsoft\Graph\Applications\Item\AddPassword\AddPasswordRequestBuilder;
use Microsoft\Graph\Applications\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Applications\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Applications\Item\CreatedOnBehalfOf\CreatedOnBehalfOfRequestBuilder;
use Microsoft\Graph\Applications\Item\ExtensionProperties\ExtensionPropertiesRequestBuilder;
use Microsoft\Graph\Applications\Item\ExtensionProperties\Item\ExtensionPropertyItemRequestBuilder;
use Microsoft\Graph\Applications\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Applications\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Applications\Item\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Applications\Item\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Applications\Item\Logo\LogoRequestBuilder;
use Microsoft\Graph\Applications\Item\Owners\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Applications\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Applications\Item\RemoveKey\RemoveKeyRequestBuilder;
use Microsoft\Graph\Applications\Item\RemovePassword\RemovePasswordRequestBuilder;
use Microsoft\Graph\Applications\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Applications\Item\SetVerifiedPublisher\SetVerifiedPublisherRequestBuilder;
use Microsoft\Graph\Applications\Item\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\Applications\Item\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Applications\Item\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Applications\Item\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Graph\Applications\Item\UnsetVerifiedPublisher\UnsetVerifiedPublisherRequestBuilder;
use Microsoft\Graph\Models\Application;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ApplicationItemRequestBuilder 
{
    /**
     * The addKey property
    */
    public function addKey(): AddKeyRequestBuilder {
        return new AddKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addPassword property
    */
    public function addPassword(): AddPasswordRequestBuilder {
        return new AddPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createdOnBehalfOf property
    */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder {
        return new CreatedOnBehalfOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensionProperties property
    */
    public function extensionProperties(): ExtensionPropertiesRequestBuilder {
        return new ExtensionPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The homeRealmDiscoveryPolicies property
    */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The logo property
    */
    public function logo(): LogoRequestBuilder {
        return new LogoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The owners property
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The removeKey property
    */
    public function removeKey(): RemoveKeyRequestBuilder {
        return new RemoveKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removePassword property
    */
    public function removePassword(): RemovePasswordRequestBuilder {
        return new RemovePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setVerifiedPublisher property
    */
    public function setVerifiedPublisher(): SetVerifiedPublisherRequestBuilder {
        return new SetVerifiedPublisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokenIssuancePolicies property
    */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokenLifetimePolicies property
    */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unsetVerifiedPublisher property
    */
    public function unsetVerifiedPublisher(): UnsetVerifiedPublisherRequestBuilder {
        return new UnsetVerifiedPublisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ApplicationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/applications/{application%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Deletes an application. When deleted, apps are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ApplicationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get the properties and relationships of an application object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ApplicationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * Update the properties of an application object.
     * @param Application $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Application $body, ?ApplicationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Deletes an application. When deleted, apps are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ApplicationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.applications.item.extensionProperties.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionPropertyItemRequestBuilder
    */
    public function extensionPropertiesById(string $id): ExtensionPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extensionProperty%2Did'] = $id;
        return new ExtensionPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get the properties and relationships of an application object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ApplicationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Application::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.applications.item.homeRealmDiscoveryPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function homeRealmDiscoveryPoliciesById(string $id): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy%2Did'] = $id;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.applications.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of an application object.
     * @param Application $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Application $body, ?ApplicationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.applications.item.tokenIssuancePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.applications.item.tokenLifetimePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
