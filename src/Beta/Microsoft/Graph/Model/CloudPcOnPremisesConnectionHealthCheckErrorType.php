<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnectionHealthCheckErrorType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* CloudPcOnPremisesConnectionHealthCheckErrorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnectionHealthCheckErrorType extends Enum
{
    /**
    * The Enum CloudPcOnPremisesConnectionHealthCheckErrorType
    */
    const DNS_CHECK_FQDN_NOT_FOUND = "dnsCheckFqdnNotFound";
    const DNS_CHECK_UNKNOWN_ERROR = "dnsCheckUnknownError";
    const AD_JOIN_CHECK_FQDN_NOT_FOUND = "adJoinCheckFqdnNotFound";
    const AD_JOIN_CHECK_INCORRECT_CREDENTIALS = "adJoinCheckIncorrectCredentials";
    const AD_JOIN_CHECK_ORGANIZATIONAL_UNIT_NOT_FOUND = "adJoinCheckOrganizationalUnitNotFound";
    const AD_JOIN_CHECK_ORGANIZATIONAL_UNIT_INCORRECT_FORMAT = "adJoinCheckOrganizationalUnitIncorrectFormat";
    const AD_JOIN_CHECK_COMPUTER_OBJECT_ALREADY_EXISTS = "adJoinCheckComputerObjectAlreadyExists";
    const AD_JOIN_CHECK_ACCESS_DENIED = "adJoinCheckAccessDenied";
    const AD_JOIN_CHECK_UNKNOWN_ERROR = "adJoinCheckUnknownError";
    const ENDPOINT_CONNECTIVITY_CHECK_CLOUD_PC_URL_NOT_ALLOW_LISTED = "endpointConnectivityCheckCloudPcUrlNotAllowListed";
    const ENDPOINT_CONNECTIVITY_CHECK_WVD_URL_NOT_ALLOW_LISTED = "endpointConnectivityCheckWVDUrlNotAllowListed";
    const ENDPOINT_CONNECTIVITY_CHECK_INTUNE_URL_NOT_ALLOW_LISTED = "endpointConnectivityCheckIntuneUrlNotAllowListed";
    const ENDPOINT_CONNECTIVITY_CHECK_UNKNOWN_ERROR = "endpointConnectivityCheckUnknownError";
    const AZURE_AD_DEVICE_SYNC_CHECK_DEVICE_NOT_FOUND = "azureAdDeviceSyncCheckDeviceNotFound";
    const AZURE_AD_DEVICE_SYNC_CHECK_LONG_SYNC_CIRCLE = "azureAdDeviceSyncCheckLongSyncCircle";
    const AZURE_AD_DEVICE_SYNC_CHECK_UNKNOWN_ERROR = "azureAdDeviceSyncCheckUnknownError";
    const RESOURCE_AVAILABILITY_CHECK_NO_SUBNET_IP = "resourceAvailabilityCheckNoSubnetIP";
    const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_DISABLED = "resourceAvailabilityCheckSubscriptionDisabled";
    const RESOURCE_AVAILABILITY_CHECK_AZURE_POLICY_VIOLATION = "resourceAvailabilityCheckAzurePolicyViolation";
    const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_NOT_FOUND = "resourceAvailabilityCheckSubscriptionNotFound";
    const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_TRANSFERRED = "resourceAvailabilityCheckSubscriptionTransferred";
    const RESOURCE_AVAILABILITY_CHECK_GENERAL_SUBSCRIPTION_ERROR = "resourceAvailabilityCheckGeneralSubscriptionError";
    const RESOURCE_AVAILABILITY_CHECK_UNSUPPORTED_V_NET_REGION = "resourceAvailabilityCheckUnsupportedVNetRegion";
    const RESOURCE_AVAILABILITY_CHECK_UNKNOWN_ERROR = "resourceAvailabilityCheckUnknownError";
    const PERMISSION_CHECK_NO_SUBSCRIPTION_READER_ROLE = "permissionCheckNoSubscriptionReaderRole";
    const PERMISSION_CHECK_NO_RESOURCE_GROUP_OWNER_ROLE = "permissionCheckNoResourceGroupOwnerRole";
    const PERMISSION_CHECK_NO_V_NET_CONTRIBUTOR_ROLE = "permissionCheckNoVNetContributorRole";
    const PERMISSION_CHECK_UNKNOWN_ERROR = "permissionCheckUnknownError";
    const INTERNAL_SERVER_ERROR_DEPLOYMENT_CANCELED = "internalServerErrorDeploymentCanceled";
    const INTERNAL_SERVER_ERROR_ALLOCATE_RESOURCE_FAILED = "internalServerErrorAllocateResourceFailed";
    const INTERNAL_SERVER_ERROR_VM_DEPLOYMENT_TIMEOUT = "internalServerErrorVMDeploymentTimeout";
    const INTERNAL_SERVER_ERROR_UNABLE_TO_RUN_DSC_SCRIPT = "internalServerErrorUnableToRunDscScript";
    const INTERNAL_SERVER_UNKNOWN_ERROR = "internalServerUnknownError";
}
