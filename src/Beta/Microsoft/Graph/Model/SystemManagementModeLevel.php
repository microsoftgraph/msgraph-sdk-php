<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SystemManagementModeLevel File
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
* SystemManagementModeLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SystemManagementModeLevel extends Enum
{
    /**
    * The Enum SystemManagementModeLevel
    */
    const NOT_APPLICABLE = "notApplicable";
    const LEVEL1 = "level1";
    const LEVEL2 = "level2";
    const LEVEL3 = "level3";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
