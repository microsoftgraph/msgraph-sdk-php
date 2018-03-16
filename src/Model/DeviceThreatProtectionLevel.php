<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceThreatProtectionLevel File
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
* DeviceThreatProtectionLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceThreatProtectionLevel extends Enum
{
    /**
    * The Enum DeviceThreatProtectionLevel
    */
    const UNAVAILABLE = "unavailable";
    const SECURED = "secured";
    const LOW = "low";
    const MEDIUM = "medium";
    const HIGH = "high";
    const NOT_SET = "notSet";
}