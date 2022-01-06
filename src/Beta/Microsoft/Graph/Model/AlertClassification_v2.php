<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertClassification_v2 File
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
* AlertClassification_v2 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertClassification_v2 extends Enum
{
    /**
    * The Enum AlertClassification_v2
    */
    const UNKNOWN = "unknown";
    const FALSE_POSITIVE = "falsePositive";
    const TRUE_POSITIVE = "truePositive";
    const BENIGN_POSITIVE = "benignPositive";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
