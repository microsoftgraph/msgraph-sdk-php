<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QualityUpdateCadence File
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
* QualityUpdateCadence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class QualityUpdateCadence extends Enum
{
    /**
    * The Enum QualityUpdateCadence
    */
    const MONTHLY = "monthly";
    const OUT_OF_BAND = "outOfBand";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
