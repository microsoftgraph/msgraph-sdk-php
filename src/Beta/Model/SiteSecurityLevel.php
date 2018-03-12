<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteSecurityLevel File
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
* SiteSecurityLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SiteSecurityLevel extends Enum
{
    /**
    * The Enum SiteSecurityLevel
    */
    const USER_DEFINED = "userDefined";
    const LOW = "low";
    const MEDIUM_LOW = "mediumLow";
    const MEDIUM = "medium";
    const MEDIUM_HIGH = "mediumHigh";
    const HIGH = "high";
}