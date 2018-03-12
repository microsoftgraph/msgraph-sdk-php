<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGuardLocalSystemAuthorityCredentialGuardState File
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
* DeviceGuardLocalSystemAuthorityCredentialGuardState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceGuardLocalSystemAuthorityCredentialGuardState extends Enum
{
    /**
    * The Enum DeviceGuardLocalSystemAuthorityCredentialGuardState
    */
    const RUNNING = "running";
    const REBOOT_REQUIRED = "rebootRequired";
    const NOT_LICENSED = "notLicensed";
    const NOT_CONFIGURED = "notConfigured";
    const VIRTUALIZATION_BASED_SECURITY_NOT_RUNNING = "virtualizationBasedSecurityNotRunning";
}