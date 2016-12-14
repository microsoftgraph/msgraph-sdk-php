<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecurrencePatternType File
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
* RecurrencePatternType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RecurrencePatternType extends Enum
{
    /**
    * The Enum RecurrencePatternType
    */
    const DAILY = "0";
    const WEEKLY = "1";
    const ABSOLUTE_MONTHLY = "2";
    const RELATIVE_MONTHLY = "3";
    const ABSOLUTE_YEARLY = "4";
    const RELATIVE_YEARLY = "5";
}