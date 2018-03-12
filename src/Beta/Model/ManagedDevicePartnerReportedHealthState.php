<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDevicePartnerReportedHealthState File
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
* ManagedDevicePartnerReportedHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedDevicePartnerReportedHealthState extends Enum
{
    /**
    * The Enum ManagedDevicePartnerReportedHealthState
    */
    const UNKNOWN = "unknown";
    const ACTIVATED = "activated";
    const DEACTIVATED = "deactivated";
    const SECURED = "secured";
    const LOW_SEVERITY = "lowSeverity";
    const MEDIUM_SEVERITY = "mediumSeverity";
    const HIGH_SEVERITY = "highSeverity";
    const UNRESPONSIVE = "unresponsive";
}