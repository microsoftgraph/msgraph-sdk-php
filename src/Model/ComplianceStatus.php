<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceStatus File
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
* ComplianceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ComplianceStatus extends Enum
{
    /**
    * The Enum ComplianceStatus
    */
    const UNKNOWN = "unknown";
    const NOT_APPLICABLE = "notApplicable";
    const COMPLIANT = "compliant";
    const REMEDIATED = "remediated";
    const NON_COMPLIANT = "nonCompliant";
    const ERROR = "error";
    const CONFLICT = "conflict";
}