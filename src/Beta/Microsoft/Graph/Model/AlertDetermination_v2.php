<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertDetermination_v2 File
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
* AlertDetermination_v2 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertDetermination_v2 extends Enum
{
    /**
    * The Enum AlertDetermination_v2
    */
    const UNKNOWN = "unknown";
    const APT = "apt";
    const MALWARE = "malware";
    const SECURITY_PERSONNEL = "securityPersonnel";
    const SECURITY_TESTING = "securityTesting";
    const UNWANTED_SOFTWARE = "unwantedSoftware";
    const OTHER = "other";
    const MULTI_STAGED_ATTACK = "multiStagedAttack";
    const COMPROMISED_USER = "compromisedUser";
    const PHISHING = "phishing";
    const MALICIOUS_USER_ACTIVITY = "maliciousUserActivity";
    const CLEAN = "clean";
    const INSUFFICIENT_DATA = "insufficientData";
    const CONFIRMED_USER_ACTIVITY = "confirmedUserActivity";
    const LINE_OF_BUSINESS_APPLICATION = "lineOfBusinessApplication";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
