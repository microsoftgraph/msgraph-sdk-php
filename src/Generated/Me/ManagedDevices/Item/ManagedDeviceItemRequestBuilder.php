<?php

namespace Microsoft\Graph\Generated\Me\ManagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphBypassActivationLock\BypassActivationLockRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphCleanWindowsDevice\CleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphDeleteUserFromSharedAppleDevice\DeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphDisableLostMode\DisableLostModeRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphLocateDevice\LocateDeviceRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphLogoutSharedAppleDeviceActiveUser\LogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphRebootNow\RebootNowRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphRecoverPasscode\RecoverPasscodeRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphRemoteLock\RemoteLockRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphRequestRemoteAssistance\RequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphResetPasscode\ResetPasscodeRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphRetire\RetireRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphShutDown\ShutDownRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphSyncDevice\SyncDeviceRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphUpdateWindowsDeviceAccount\UpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphWindowsDefenderScan\WindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphWindowsDefenderUpdateSignatures\WindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\MicrosoftGraphWipe\WipeRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\Users\UsersRequestBuilder;
use Microsoft\Graph\Generated\Models\ManagedDevice;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
*/
class ManagedDeviceItemRequestBuilder 
{
    /**
     * Provides operations to manage the deviceCategory property of the microsoft.graph.managedDevice entity.
    */
    public function deviceCategory(): DeviceCategoryRequestBuilder {
        return new DeviceCategoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
    */
    public function deviceCompliancePolicyStates(): DeviceCompliancePolicyStatesRequestBuilder {
        return new DeviceCompliancePolicyStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
    */
    public function deviceConfigurationStates(): DeviceConfigurationStatesRequestBuilder {
        return new DeviceConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bypassActivationLock method.
    */
    public function microsoftGraphBypassActivationLock(): BypassActivationLockRequestBuilder {
        return new BypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cleanWindowsDevice method.
    */
    public function microsoftGraphCleanWindowsDevice(): CleanWindowsDeviceRequestBuilder {
        return new CleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteUserFromSharedAppleDevice method.
    */
    public function microsoftGraphDeleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disableLostMode method.
    */
    public function microsoftGraphDisableLostMode(): DisableLostModeRequestBuilder {
        return new DisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the locateDevice method.
    */
    public function microsoftGraphLocateDevice(): LocateDeviceRequestBuilder {
        return new LocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logoutSharedAppleDeviceActiveUser method.
    */
    public function microsoftGraphLogoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rebootNow method.
    */
    public function microsoftGraphRebootNow(): RebootNowRequestBuilder {
        return new RebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recoverPasscode method.
    */
    public function microsoftGraphRecoverPasscode(): RecoverPasscodeRequestBuilder {
        return new RecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remoteLock method.
    */
    public function microsoftGraphRemoteLock(): RemoteLockRequestBuilder {
        return new RemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteAssistance method.
    */
    public function microsoftGraphRequestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder {
        return new RequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetPasscode method.
    */
    public function microsoftGraphResetPasscode(): ResetPasscodeRequestBuilder {
        return new ResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retire method.
    */
    public function microsoftGraphRetire(): RetireRequestBuilder {
        return new RetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the shutDown method.
    */
    public function microsoftGraphShutDown(): ShutDownRequestBuilder {
        return new ShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncDevice method.
    */
    public function microsoftGraphSyncDevice(): SyncDeviceRequestBuilder {
        return new SyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateWindowsDeviceAccount method.
    */
    public function microsoftGraphUpdateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderScan method.
    */
    public function microsoftGraphWindowsDefenderScan(): WindowsDefenderScanRequestBuilder {
        return new WindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderUpdateSignatures method.
    */
    public function microsoftGraphWindowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipe method.
    */
    public function microsoftGraphWipe(): WipeRequestBuilder {
        return new WipeRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the users property of the microsoft.graph.managedDevice entity.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ManagedDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $managedDeviceId key: id of managedDevice
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $managedDeviceId = null) {
        $this->urlTemplate = '{+baseurl}/me/managedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['managedDeviceId'] = $managedDeviceId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete navigation property managedDevices for me
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function deviceCompliancePolicyStatesById(string $id): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState%2Did'] = $id;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
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
     * @return Promise
    */
    public function get(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property managedDevices in me
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property managedDevices for me
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
    public function toGetRequestInformation(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property managedDevices in me
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
