<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ManagedDevice;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\BypassActivationLock\BypassActivationLockRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\CleanWindowsDevice\CleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeleteUserFromSharedAppleDevice\DeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DisableLostMode\DisableLostModeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\LocateDevice\LocateDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\LogoutSharedAppleDeviceActiveUser\LogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\RebootNow\RebootNowRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\RecoverPasscode\RecoverPasscodeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\RemoteLock\RemoteLockRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\RequestRemoteAssistance\RequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\ResetPasscode\ResetPasscodeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\Retire\RetireRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\ShutDown\ShutDownRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\SyncDevice\SyncDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\UpdateWindowsDeviceAccount\UpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\WindowsDefenderScan\WindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\WindowsDefenderUpdateSignatures\WindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\Wipe\WipeRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ManagedDeviceItemRequestBuilder 
{
    /**
     * The bypassActivationLock property
    */
    public function bypassActivationLock(): BypassActivationLockRequestBuilder {
        return new BypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cleanWindowsDevice property
    */
    public function cleanWindowsDevice(): CleanWindowsDeviceRequestBuilder {
        return new CleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deleteUserFromSharedAppleDevice property
    */
    public function deleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCategory property
    */
    public function deviceCategory(): DeviceCategoryRequestBuilder {
        return new DeviceCategoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCompliancePolicyStates property
    */
    public function deviceCompliancePolicyStates(): DeviceCompliancePolicyStatesRequestBuilder {
        return new DeviceCompliancePolicyStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceConfigurationStates property
    */
    public function deviceConfigurationStates(): DeviceConfigurationStatesRequestBuilder {
        return new DeviceConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The disableLostMode property
    */
    public function disableLostMode(): DisableLostModeRequestBuilder {
        return new DisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The locateDevice property
    */
    public function locateDevice(): LocateDeviceRequestBuilder {
        return new LocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The logoutSharedAppleDeviceActiveUser property
    */
    public function logoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The rebootNow property
    */
    public function rebootNow(): RebootNowRequestBuilder {
        return new RebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The recoverPasscode property
    */
    public function recoverPasscode(): RecoverPasscodeRequestBuilder {
        return new RecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The remoteLock property
    */
    public function remoteLock(): RemoteLockRequestBuilder {
        return new RemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The requestRemoteAssistance property
    */
    public function requestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder {
        return new RequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetPasscode property
    */
    public function resetPasscode(): ResetPasscodeRequestBuilder {
        return new ResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The retire property
    */
    public function retire(): RetireRequestBuilder {
        return new RetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shutDown property
    */
    public function shutDown(): ShutDownRequestBuilder {
        return new ShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The syncDevice property
    */
    public function syncDevice(): SyncDeviceRequestBuilder {
        return new SyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The updateWindowsDeviceAccount property
    */
    public function updateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The windowsDefenderScan property
    */
    public function windowsDefenderScan(): WindowsDefenderScanRequestBuilder {
        return new WindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsDefenderUpdateSignatures property
    */
    public function windowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wipe property
    */
    public function wipe(): WipeRequestBuilder {
        return new WipeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ManagedDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/managedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property managedDevices for users
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The managed devices associated with the user.
     * @param ManagedDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property managedDevices in users
     * @param ManagedDevice $body 
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Delete navigation property managedDevices for users
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Generated.users.item.managedDevices.item.deviceCompliancePolicyStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function deviceCompliancePolicyStatesById(string $id): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState%2Did'] = $id;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.managedDevices.item.deviceConfigurationStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationStateItemRequestBuilder
    */
    public function deviceConfigurationStatesById(string $id): DeviceConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationState%2Did'] = $id;
        return new DeviceConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The managed devices associated with the user.
     * @param ManagedDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ManagedDevice::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property managedDevices in users
     * @param ManagedDevice $body 
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ManagedDevice::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
