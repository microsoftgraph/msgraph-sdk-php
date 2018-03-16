<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionEnforcementLevel File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WindowsInformationProtectionEnforcementLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtectionEnforcementLevel extends Enum
{
    /**
    * The Enum WindowsInformationProtectionEnforcementLevel
    */
    const NO_PROTECTION = "noProtection";
    const ENCRYPT_AND_AUDIT_ONLY = "encryptAndAuditOnly";
    const ENCRYPT_AUDIT_AND_PROMPT = "encryptAuditAndPrompt";
    const ENCRYPT_AUDIT_AND_BLOCK = "encryptAuditAndBlock";
}