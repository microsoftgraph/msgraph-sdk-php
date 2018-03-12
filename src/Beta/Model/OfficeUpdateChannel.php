<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeUpdateChannel File
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
* OfficeUpdateChannel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OfficeUpdateChannel extends Enum
{
    /**
    * The Enum OfficeUpdateChannel
    */
    const NONE = "none";
    const CURRENT = "current";
    const DEFERRED = "deferred";
    const FIRST_RELEASE_CURRENT = "firstReleaseCurrent";
    const FIRST_RELEASE_DEFERRED = "firstReleaseDeferred";
}