<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingContentPreference File
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
* TrainingContentPreference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingContentPreference extends Enum
{
    /**
    * The Enum TrainingContentPreference
    */
    const UNKNOWN = "unknown";
    const MICROSOFT = "microsoft";
    const CUSTOM = "custom";
    const NO_TRAINING = "noTraining";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
