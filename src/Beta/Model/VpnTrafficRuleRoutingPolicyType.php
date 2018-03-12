<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnTrafficRuleRoutingPolicyType File
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
* VpnTrafficRuleRoutingPolicyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnTrafficRuleRoutingPolicyType extends Enum
{
    /**
    * The Enum VpnTrafficRuleRoutingPolicyType
    */
    const NONE = "none";
    const SPLIT_TUNNEL = "splitTunnel";
    const FORCE_TUNNEL = "forceTunnel";
}