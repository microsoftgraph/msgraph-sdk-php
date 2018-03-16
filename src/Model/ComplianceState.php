<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceState File
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
* ComplianceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ComplianceState extends Enum
{
    /**
    * The Enum ComplianceState
    */
    const UNKNOWN = "unknown";
    const COMPLIANT = "compliant";
    const NONCOMPLIANT = "noncompliant";
    const CONFLICT = "conflict";
    const ERROR = "error";
    const IN_GRACE_PERIOD = "inGracePeriod";
    const CONFIG_MANAGER = "configManager";
}