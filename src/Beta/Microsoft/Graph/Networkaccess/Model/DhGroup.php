<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DhGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

use Microsoft\Graph\Core\Enum;

/**
* DhGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DhGroup extends Enum
{
    /**
    * The Enum DhGroup
    */
    const DH_GROUP14 = "dhGroup14";
    const DH_GROUP24 = "dhGroup24";
    const DH_GROUP2048 = "dhGroup2048";
    const ECP256 = "ecp256";
    const ECP384 = "ecp384";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
