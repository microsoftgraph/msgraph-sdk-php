<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ElevationRequestState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ElevationRequestState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ElevationRequestState extends Enum
{
    /**
    * The Enum ElevationRequestState
    */
    const NONE = "none";
    const PENDING = "pending";
    const APPROVED = "approved";
    const DENIED = "denied";
    const EXPIRED = "expired";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
