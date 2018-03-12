<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingUnitedStatesMoviesType File
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
* RatingUnitedStatesMoviesType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RatingUnitedStatesMoviesType extends Enum
{
    /**
    * The Enum RatingUnitedStatesMoviesType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const GENERAL = "general";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const PARENTAL_GUIDANCE13 = "parentalGuidance13";
    const RESTRICTED = "restricted";
    const ADULTS = "adults";
}