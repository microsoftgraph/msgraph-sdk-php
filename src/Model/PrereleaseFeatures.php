<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrereleaseFeatures File
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
* PrereleaseFeatures class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PrereleaseFeatures extends Enum
{
    /**
    * The Enum PrereleaseFeatures
    */
    const USER_DEFINED = "userDefined";
    const SETTINGS_ONLY = "settingsOnly";
    const SETTINGS_AND_EXPERIMENTATIONS = "settingsAndExperimentations";
    const NOT_ALLOWED = "notAllowed";
}