<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingAustraliaTelevisionType File
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
* RatingAustraliaTelevisionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RatingAustraliaTelevisionType extends Enum
{
    /**
    * The Enum RatingAustraliaTelevisionType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const PRESCHOOLERS = "preschoolers";
    const CHILDREN = "children";
    const GENERAL = "general";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const MATURE = "mature";
    const AGES_ABOVE15 = "agesAbove15";
    const AGES_ABOVE15_ADULT_VIOLENCE = "agesAbove15AdultViolence";
}