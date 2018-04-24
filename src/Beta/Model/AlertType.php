<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertType File
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
* AlertType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AlertType extends Enum
{
    /**
    * The Enum AlertType
    */
    const UNKNOWN = "unknown";
    const SINGLE_SENSOR_ATOMIC = "singleSensorAtomic";
    const SINGLE_SENSOR_COMPOUND = "singleSensorCompound";
    const MULTI_SENSOR_COMPOUND = "multiSensorCompound";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}