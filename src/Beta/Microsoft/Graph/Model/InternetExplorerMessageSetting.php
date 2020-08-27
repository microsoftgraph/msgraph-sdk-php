<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InternetExplorerMessageSetting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* InternetExplorerMessageSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InternetExplorerMessageSetting extends Enum
{
    /**
    * The Enum InternetExplorerMessageSetting
    */
    const NOT_CONFIGURED = "notConfigured";
    const DISABLED = "disabled";
    const ENABLED = "enabled";
    const KEEP_GOING = "keepGoing";
}