<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsAdministratorElevationPromptBehaviorType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* LocalSecurityOptionsAdministratorElevationPromptBehaviorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocalSecurityOptionsAdministratorElevationPromptBehaviorType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsAdministratorElevationPromptBehaviorType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ELEVATE_WITHOUT_PROMPTING = "elevateWithoutPrompting";
    const PROMPT_FOR_CREDENTIALS_ON_THE_SECURE_DESKTOP = "promptForCredentialsOnTheSecureDesktop";
    const PROMPT_FOR_CONSENT_ON_THE_SECURE_DESKTOP = "promptForConsentOnTheSecureDesktop";
    const PROMPT_FOR_CREDENTIALS = "promptForCredentials";
    const PROMPT_FOR_CONSENT = "promptForConsent";
    const PROMPT_FOR_CONSENT_FOR_NON_WINDOWS_BINARIES = "promptForConsentForNonWindowsBinaries";
}