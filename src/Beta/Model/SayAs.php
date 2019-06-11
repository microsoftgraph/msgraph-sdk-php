<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SayAs File
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
* SayAs class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SayAs extends Enum
{
    /**
    * The Enum SayAs
    */
    const UNKNOWN = "unknown";
    const YEAR_MONTH_DAY = "yearMonthDay";
    const MONTH_DAY_YEAR = "monthDayYear";
    const DAY_MONTH_YEAR = "dayMonthYear";
    const YEAR_MONTH = "yearMonth";
    const MONTH_YEAR = "monthYear";
    const MONTH_DAY = "monthDay";
    const DAY_MONTH = "dayMonth";
    const DAY = "day";
    const MONTH = "month";
    const YEAR = "year";
    const CARDINAL = "cardinal";
    const ORDINAL = "ordinal";
    const LETTERS = "letters";
    const TIME12 = "time12";
    const TIME24 = "time24";
    const TELEPHONE = "telephone";
    const NAME = "name";
    const PHONETIC_NAME = "phoneticName";
}