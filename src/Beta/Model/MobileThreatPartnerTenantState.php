<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileThreatPartnerTenantState File
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
* MobileThreatPartnerTenantState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MobileThreatPartnerTenantState extends Enum
{
    /**
    * The Enum MobileThreatPartnerTenantState
    */
    const UNAVAILABLE = "unavailable";
    const AVAILABLE = "available";
    const ENABLED = "enabled";
    const UNRESPONSIVE = "unresponsive";
}