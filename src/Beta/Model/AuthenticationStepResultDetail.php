<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStepResultDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* AuthenticationStepResultDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AuthenticationStepResultDetail extends Enum
{
    /**
    * The Enum AuthenticationStepResultDetail
    */
    const NONE = "none";
    const REQUIRE_MFA_IN_CLOUD = "requireMfaInCloud";
    const REQUIRE_MFA_AT_EXT_ID_P = "requireMfaAtExtIdP";
    const MFA_DONE_IN_CLOUD = "mfaDoneInCloud";
    const MFA_DONE_AT_EXT_ID_P = "mfaDoneAtExtIdP";
    const MFA_FROM_SESSION_TOKEN__DEPRECATED = "mfaFromSessionTokenDeprecated";
    const MFA_FROM_BLOB_GRANT__DEPRECATED = "mfaFromBlobGrantDeprecated";
    const MFA_FROM_ACCESS_TOKEN__DEPRECATED = "mfaFromAccessTokenDeprecated";
    const MFA_FROM_FLOW_TOKEN__DEPRECATED = "mfaFromFlowTokenDeprecated";
    const SKIP_MFA_DUE_TO_ICN = "skipMfaDueToIcn";
    const SKIP_MFA_DUE_TO_IP = "skipMfaDueToIP";
    const SKIP_MFA_DUE_TO_NGC = "skipMfaDueToNgc";
    const SKIP_MFA_DUE_TO_REGISTERED_DEVICE = "skipMfaDueToRegisteredDevice";
    const SKIP_MFA_DUE_TO_REMEMBERED_DEVICE = "skipMfaDueToRememberedDevice";
    const SKIP_MFA_DUE_TO_APP_PASSWORD = "skipMfaDueToAppPassword";
    const SKIP_MFA_DURING_WINDOWS_BROKER_LOGON = "skipMfaDuringWindowsBrokerLogon";
    const SKIP_MFA_DURING_PROOF_UP = "skipMfaDuringProofUp";
    const MFA_EXPIRED = "mfaExpired";
    const SKIP_MFA_DUE_TO_FIDO_UV_FLAG = "skipMfaDueToFidoUVFlag";
    const SKIP_MFA_DUE_TO_WIA_OR_WIA_OR_M_FA_FOR_DRS_FLOW = "skipMfaDueToWiaOrWiaOrMFaForDrsFlow";
    const SKIP_MFA_DUE_TO_WIA = "skipMfaDueToWia";
    const SKIP_MFA_DUE_TO_WIA_FOR_DRS_FLOW = "skipMfaDueToWiaForDrsFlow";
    const MFA_FROM_CREDENTIAL = "mfaFromCredential";
    const SUCCESS = "success";
    const AUTHENTICATION_PENDING = "authenticationPending";
    const INVALID_SESSION = "invalidSession";
    const USER_VOICE_AUTH_FAILED_CALL_WENT_TO_VOICEMAIL = "userVoiceAuthFailedCallWentToVoicemail";
    const SMS_AUTH_FAILED_WRONG_CODE_ENTERED = "smsAuthFailedWrongCodeEntered";
    const USER_AUTH_FAILED_DUPLICATE_REQUEST = "userAuthFailedDuplicateRequest";
    const USER_VOICE_AUTH_FAILED_PHONE_HUNG_UP = "userVoiceAuthFailedPhoneHungUp";
    const OATH_CODE_INCORRECT = "oathCodeIncorrect";
    const USER_VOICE_AUTH_FAILED_PHONE_UNREACHABLE = "userVoiceAuthFailedPhoneUnreachable";
    const SMS_AUTH_FAILED_MAX_ALLOWED_CODE_RETRY_REACHED = "smsAuthFailedMaxAllowedCodeRetryReached";
    const PHONE_APP_DENIED = "phoneAppDenied";
    const INTERNAL_ERROR = "internalError";
    const PHONE_APP_NOTIFICATION_FAILED = "phoneAppNotificationFailed";
    const AUTHENTICATION_METHOD_FAILED = "authenticationMethodFailed";
    const PHONE_APP_ALL_DEVICES_BLOCKED = "phoneAppAllDevicesBlocked";
    const PROOF_DATA_NOT_FOUND = "proofDataNotFound";
    const INVALID_FORMAT = "invalidFormat";
    const PHONE_APP_NO_RESPONSE = "phoneAppNoResponse";
    const PIN_ENTERED = "pinEntered";
    const USER_IS_BLOCKED = "userIsBlocked";
    const OATH_CODE_DUPLICATE = "oathCodeDuplicate";
    const AUTHENTICATION_METHOD_NOT_CONFIGURED = "authenticationMethodNotConfigured";
    const USER_NOT_FOUND = "userNotFound";
    const SMS_SENT = "smsSent";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}