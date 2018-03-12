<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingCanadaTelevisionType File
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
* RatingCanadaTelevisionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RatingCanadaTelevisionType extends Enum
{
    /**
    * The Enum RatingCanadaTelevisionType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const CHILDREN = "children";
    const CHILDREN_ABOVE8 = "childrenAbove8";
    const GENERAL = "general";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const AGES_ABOVE14 = "agesAbove14";
    const AGES_ABOVE18 = "agesAbove18";
}