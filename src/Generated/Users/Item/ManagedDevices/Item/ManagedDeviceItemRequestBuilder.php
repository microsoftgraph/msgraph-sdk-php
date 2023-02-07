<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ManagedDevice;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphBypassActivationLock\MicrosoftGraphBypassActivationLockRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphCleanWindowsDevice\MicrosoftGraphCleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphDeleteUserFromSharedAppleDevice\MicrosoftGraphDeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphDisableLostMode\MicrosoftGraphDisableLostModeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphLocateDevice\MicrosoftGraphLocateDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphLogoutSharedAppleDeviceActiveUser\MicrosoftGraphLogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphRebootNow\MicrosoftGraphRebootNowRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphRecoverPasscode\MicrosoftGraphRecoverPasscodeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphRemoteLock\MicrosoftGraphRemoteLockRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphRequestRemoteAssistance\MicrosoftGraphRequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphResetPasscode\MicrosoftGraphResetPasscodeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphRetire\MicrosoftGraphRetireRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphShutDown\MicrosoftGraphShutDownRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphSyncDevice\MicrosoftGraphSyncDeviceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphUpdateWindowsDeviceAccount\MicrosoftGraphUpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphWindowsDefenderScan\MicrosoftGraphWindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphWindowsDefenderUpdateSignatures\MicrosoftGraphWindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\MicrosoftGraphWipe\MicrosoftGraphWipeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\Users\UsersRequestBuilder;
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
    public function microsoftGraphBypassActivationLock(): MicrosoftGraphBypassActivationLockRequestBuilder {
        return new MicrosoftGraphBypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cleanWindowsDevice method.
    */
    public function microsoftGraphCleanWindowsDevice(): MicrosoftGraphCleanWindowsDeviceRequestBuilder {
        return new MicrosoftGraphCleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteUserFromSharedAppleDevice method.
    */
    public function microsoftGraphDeleteUserFromSharedAppleDevice(): MicrosoftGraphDeleteUserFromSharedAppleDeviceRequestBuilder {
        return new MicrosoftGraphDeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disableLostMode method.
    */
    public function microsoftGraphDisableLostMode(): MicrosoftGraphDisableLostModeRequestBuilder {
        return new MicrosoftGraphDisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the locateDevice method.
    */
    public function microsoftGraphLocateDevice(): MicrosoftGraphLocateDeviceRequestBuilder {
        return new MicrosoftGraphLocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logoutSharedAppleDeviceActiveUser method.
    */
    public function microsoftGraphLogoutSharedAppleDeviceActiveUser(): MicrosoftGraphLogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new MicrosoftGraphLogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rebootNow method.
    */
    public function microsoftGraphRebootNow(): MicrosoftGraphRebootNowRequestBuilder {
        return new MicrosoftGraphRebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recoverPasscode method.
    */
    public function microsoftGraphRecoverPasscode(): MicrosoftGraphRecoverPasscodeRequestBuilder {
        return new MicrosoftGraphRecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remoteLock method.
    */
    public function microsoftGraphRemoteLock(): MicrosoftGraphRemoteLockRequestBuilder {
        return new MicrosoftGraphRemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteAssistance method.
    */
    public function microsoftGraphRequestRemoteAssistance(): MicrosoftGraphRequestRemoteAssistanceRequestBuilder {
        return new MicrosoftGraphRequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetPasscode method.
    */
    public function microsoftGraphResetPasscode(): MicrosoftGraphResetPasscodeRequestBuilder {
        return new MicrosoftGraphResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retire method.
    */
    public function microsoftGraphRetire(): MicrosoftGraphRetireRequestBuilder {
        return new MicrosoftGraphRetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the shutDown method.
    */
    public function microsoftGraphShutDown(): MicrosoftGraphShutDownRequestBuilder {
        return new MicrosoftGraphShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncDevice method.
    */
    public function microsoftGraphSyncDevice(): MicrosoftGraphSyncDeviceRequestBuilder {
        return new MicrosoftGraphSyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateWindowsDeviceAccount method.
    */
    public function microsoftGraphUpdateWindowsDeviceAccount(): MicrosoftGraphUpdateWindowsDeviceAccountRequestBuilder {
        return new MicrosoftGraphUpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderScan method.
    */
    public function microsoftGraphWindowsDefenderScan(): MicrosoftGraphWindowsDefenderScanRequestBuilder {
        return new MicrosoftGraphWindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderUpdateSignatures method.
    */
    public function microsoftGraphWindowsDefenderUpdateSignatures(): MicrosoftGraphWindowsDefenderUpdateSignaturesRequestBuilder {
        return new MicrosoftGraphWindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipe method.
    */
    public function microsoftGraphWipe(): MicrosoftGraphWipeRequestBuilder {
        return new MicrosoftGraphWipeRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/managedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property managedDevices for users
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
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationStateItemRequestBuilder
    */
    public function deviceConfigurationStatesById(string $id): DeviceConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationState%2Did'] = $id;
        return new DeviceConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
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
     * Update the navigation property managedDevices in users
     * @param ManagedDevice $body The request body
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
     * Delete navigation property managedDevices for users
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
     * Update the navigation property managedDevices in users
     * @param ManagedDevice $body The request body
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
