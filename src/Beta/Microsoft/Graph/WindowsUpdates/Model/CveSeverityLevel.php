<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CveSeverityLevel File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

use Microsoft\Graph\Core\Enum;

/**
* CveSeverityLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CveSeverityLevel extends Enum
{
    /**
    * The Enum CveSeverityLevel
    */
    const CRITICAL = "critical";
    const IMPORTANT = "important";
    const MODERATE = "moderate";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
