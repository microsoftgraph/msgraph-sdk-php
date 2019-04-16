<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPfxIntendedPurpose File
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
* UserPfxIntendedPurpose class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserPfxIntendedPurpose extends Enum
{
    /**
    * The Enum UserPfxIntendedPurpose
    */
    const UNASSIGNED = "unassigned";
    const SMIME_ENCRYPTION = "smimeEncryption";
    const SMIME_SIGNING = "smimeSigning";
    const VPN = "vpn";
    const WIFI = "wifi";
}