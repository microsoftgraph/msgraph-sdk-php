<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateForBusinessUpdateWeeks File
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
* WindowsUpdateForBusinessUpdateWeeks class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsUpdateForBusinessUpdateWeeks extends Enum
{
    /**
    * The Enum WindowsUpdateForBusinessUpdateWeeks
    */
    const USER_DEFINED = "userDefined";
    const FIRST_WEEK = "firstWeek";
    const SECOND_WEEK = "secondWeek";
    const THIRD_WEEK = "thirdWeek";
    const FOURTH_WEEK = "fourthWeek";
    const EVERY_WEEK = "everyWeek";
}