<?php

namespace Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item\AppliedPolicies\AppliedPoliciesRequestBuilder;
use Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item\AppliedPolicies\Item\ManagedAppPolicyItemRequestBuilder as MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemAppliedPoliciesItemManagedAppPolicyItemRequestBuilder;
use Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item\IntendedPolicies\IntendedPoliciesRequestBuilder;
use Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item\IntendedPolicies\Item\ManagedAppPolicyItemRequestBuilder as MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemIntendedPoliciesItemManagedAppPolicyItemRequestBuilder;
use Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item\Operations\Item\ManagedAppOperationItemRequestBuilder;
use Microsoft\Graph\DeviceAppManagement\ManagedAppRegistrations\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Models\ManagedAppRegistration;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ManagedAppRegistrationItemRequestBuilder 
{
    /**
     * The appliedPolicies property
    */
    public function appliedPolicies(): AppliedPoliciesRequestBuilder {
        return new AppliedPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The intendedPolicies property
    */
    public function intendedPolicies(): IntendedPoliciesRequestBuilder {
        return new IntendedPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph.deviceAppManagement.managedAppRegistrations.item.appliedPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemAppliedPoliciesItemManagedAppPolicyItemRequestBuilder
    */
    public function appliedPoliciesById(string $id): MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemAppliedPoliciesItemManagedAppPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppPolicy%2Did'] = $id;
        return new MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemAppliedPoliciesItemManagedAppPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedAppRegistrationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/managedAppRegistrations/{managedAppRegistration%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property managedAppRegistrations for deviceAppManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ManagedAppRegistrationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The managed app registrations.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ManagedAppRegistrationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property managedAppRegistrations in deviceAppManagement
     * @param ManagedAppRegistration $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ManagedAppRegistration $body, ?ManagedAppRegistrationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property managedAppRegistrations for deviceAppManagement
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ManagedAppRegistrationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * The managed app registrations.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ManagedAppRegistrationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ManagedAppRegistration::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceAppManagement.managedAppRegistrations.item.intendedPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemIntendedPoliciesItemManagedAppPolicyItemRequestBuilder
    */
    public function intendedPoliciesById(string $id): MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemIntendedPoliciesItemManagedAppPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppPolicy%2Did'] = $id;
        return new MicrosoftGraphDeviceAppManagementManagedAppRegistrationsItemIntendedPoliciesItemManagedAppPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.deviceAppManagement.managedAppRegistrations.item.operations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppOperationItemRequestBuilder
    */
    public function operationsById(string $id): ManagedAppOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppOperation%2Did'] = $id;
        return new ManagedAppOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property managedAppRegistrations in deviceAppManagement
     * @param ManagedAppRegistration $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ManagedAppRegistration $body, ?ManagedAppRegistrationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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

}
