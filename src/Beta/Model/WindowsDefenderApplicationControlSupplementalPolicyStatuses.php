<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderApplicationControlSupplementalPolicyStatuses File
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
* WindowsDefenderApplicationControlSupplementalPolicyStatuses class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsDefenderApplicationControlSupplementalPolicyStatuses extends Enum
{
    /**
    * The Enum WindowsDefenderApplicationControlSupplementalPolicyStatuses
    */
    const UNKNOWN = "unknown";
    const SUCCESS = "success";
    const TOKEN_ERROR = "tokenError";
    const NOT_AUTHORIZED_BY_TOKEN = "notAuthorizedByToken";
    const POLICY_NOT_FOUND = "policyNotFound";
}