<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailSyncDuration File
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
* EmailSyncDuration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmailSyncDuration extends Enum
{
    /**
    * The Enum EmailSyncDuration
    */
    const USER_DEFINED = "userDefined";
    const ONE_DAY = "oneDay";
    const THREE_DAYS = "threeDays";
    const ONE_WEEK = "oneWeek";
    const TWO_WEEKS = "twoWeeks";
    const ONE_MONTH = "oneMonth";
    const UNLIMITED = "unlimited";
}