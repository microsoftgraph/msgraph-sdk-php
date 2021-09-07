<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* M365AlertClassification File
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
* M365AlertClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class M365AlertClassification extends Enum
{
    /**
    * The Enum M365AlertClassification
    */
    const UNKNOWN = "unknown";
    const FALSE_POSITIVE = "falsePositive";
    const TRUE_POSITIVE = "truePositive";
    const BENIGN_POSITIVE = "benignPositive";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
