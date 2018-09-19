<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientState File
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
* ConfigurationManagerClientState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConfigurationManagerClientState extends Enum
{
    /**
    * The Enum ConfigurationManagerClientState
    */
    const UNKNOWN = "unknown";
    const INSTALLED = "installed";
    const HEALTHY = "healthy";
    const INSTALL_FAILED = "installFailed";
    const UPDATE_FAILED = "updateFailed";
    const COMMUNICATION_ERROR = "communicationError";
}