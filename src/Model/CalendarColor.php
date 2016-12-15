<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarColor File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* CalendarColor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class CalendarColor extends Enum
{
    /**
    * The Enum CalendarColor
    */
    const LIGHT_BLUE = "0";
    const LIGHT_GREEN = "1";
    const LIGHT_ORANGE = "2";
    const LIGHT_GRAY = "3";
    const LIGHT_YELLOW = "4";
    const LIGHT_TEAL = "5";
    const LIGHT_PINK = "6";
    const LIGHT_BROWN = "7";
    const LIGHT_RED = "8";
    const MAX_COLOR = "9";
    const AUTO = "10";
}