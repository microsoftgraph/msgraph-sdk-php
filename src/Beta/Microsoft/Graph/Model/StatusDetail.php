<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StatusDetail File
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
* StatusDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StatusDetail extends Enum
{
    /**
    * The Enum StatusDetail
    */
    const SUBMITTED = "submitted";
    const APPROVED = "approved";
    const COMPLETED = "completed";
    const CANCELED = "canceled";
    const REJECTED = "rejected";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
