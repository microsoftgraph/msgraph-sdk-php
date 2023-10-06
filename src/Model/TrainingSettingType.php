<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingSettingType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* TrainingSettingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingSettingType extends Enum
{
    /**
    * The Enum TrainingSettingType
    */
    const MICROSOFT_CUSTOM = "microsoftCustom";
    const MICROSOFT_MANAGED = "microsoftManaged";
    const NO_TRAINING = "noTraining";
    const CUSTOM = "custom";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
