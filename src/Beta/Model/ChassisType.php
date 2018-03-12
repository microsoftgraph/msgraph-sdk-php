<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChassisType File
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
* ChassisType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ChassisType extends Enum
{
    /**
    * The Enum ChassisType
    */
    const UNKNOWN = "unknown";
    const DESKTOP = "desktop";
    const LAPTOP = "laptop";
    const WORKS_WORKSTATION = "worksWorkstation";
    const ENTERPRISE_SERVER = "enterpriseServer";
    const PHONE = "phone";
    const TABLET = "tablet";
    const MOBILE_OTHER = "mobileOther";
    const MOBILE_UNKNOWN = "mobileUnknown";
}