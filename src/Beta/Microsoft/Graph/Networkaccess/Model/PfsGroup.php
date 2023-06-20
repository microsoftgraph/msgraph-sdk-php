<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PfsGroup File
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
* PfsGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PfsGroup extends Enum
{
    /**
    * The Enum PfsGroup
    */
    const NONE = "none";
    const PFS1 = "pfs1";
    const PFS2 = "pfs2";
    const PFS14 = "pfs14";
    const PFS24 = "pfs24";
    const PFS2048 = "pfs2048";
    const PFSMM = "pfsmm";
    const ECP256 = "ecp256";
    const ECP384 = "ecp384";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
