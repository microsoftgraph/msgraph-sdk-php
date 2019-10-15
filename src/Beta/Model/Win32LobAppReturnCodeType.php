<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppReturnCodeType File
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
* Win32LobAppReturnCodeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Win32LobAppReturnCodeType extends Enum
{
    /**
    * The Enum Win32LobAppReturnCodeType
    */
    const FAILED = "failed";
    const SUCCESS = "success";
    const SOFT_REBOOT = "softReboot";
    const HARD_REBOOT = "hardReboot";
    const RETRY = "retry";
}