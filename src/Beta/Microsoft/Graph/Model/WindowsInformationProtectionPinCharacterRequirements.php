<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionPinCharacterRequirements File
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
* WindowsInformationProtectionPinCharacterRequirements class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionPinCharacterRequirements extends Enum
{
    /**
    * The Enum WindowsInformationProtectionPinCharacterRequirements
    */
    const NOT_ALLOW = "notAllow";
    const REQUIRE_AT_LEAST_ONE = "requireAtLeastOne";
    const ALLOW = "allow";
}