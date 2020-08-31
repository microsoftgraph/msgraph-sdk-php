<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserNewMessageRestriction File
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
* UserNewMessageRestriction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserNewMessageRestriction extends Enum
{
    /**
    * The Enum UserNewMessageRestriction
    */
    const EVERYONE = "everyone";
    const EVERYONE_EXCEPT_GUESTS = "everyoneExceptGuests";
    const MODERATORS = "moderators";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}