<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* EducationSynchronizationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationSynchronizationStatus extends Enum
{
    /**
    * The Enum EducationSynchronizationStatus
    */
    const PAUSED = "paused";
    const IN_PROGRESS = "inProgress";
    const SUCCESS = "success";
    const ERROR = "error";
    const VALIDATION_ERROR = "validationError";
    const QUARANTINED = "quarantined";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}