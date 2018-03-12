<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkEnrollmentTarget File
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
* AndroidForWorkEnrollmentTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkEnrollmentTarget extends Enum
{
    /**
    * The Enum AndroidForWorkEnrollmentTarget
    */
    const NONE = "none";
    const ALL = "all";
    const TARGETED = "targeted";
    const TARGETED_AS_ENROLLMENT_RESTRICTIONS = "targetedAsEnrollmentRestrictions";
}