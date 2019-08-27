<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentityUploadStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* ImportedWindowsAutopilotDeviceIdentityUploadStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ImportedWindowsAutopilotDeviceIdentityUploadStatus extends Enum
{
    /**
    * The Enum ImportedWindowsAutopilotDeviceIdentityUploadStatus
    */
    const NO_UPLOAD = "noUpload";
    const PENDING = "pending";
    const COMPLETE = "complete";
    const ERROR = "error";
}