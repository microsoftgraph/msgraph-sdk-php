<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkCrossProfileDataSharingType File
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
* AndroidForWorkCrossProfileDataSharingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkCrossProfileDataSharingType extends Enum
{
    /**
    * The Enum AndroidForWorkCrossProfileDataSharingType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const PREVENT_ANY = "preventAny";
    const ALLOW_PERSONAL_TO_WORK = "allowPersonalToWork";
    const NO_RESTRICTIONS = "noRestrictions";
}