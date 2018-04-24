<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType File
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
* LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ADMINISTRATORS = "administrators";
    const ADMINISTRATORS_AND_POWER_USERS = "administratorsAndPowerUsers";
    const ADMINISTRATORS_AND_INTERACTIVE_USERS = "administratorsAndInteractiveUsers";
}