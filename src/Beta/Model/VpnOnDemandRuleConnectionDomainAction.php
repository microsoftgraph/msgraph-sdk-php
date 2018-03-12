<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnOnDemandRuleConnectionDomainAction File
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
* VpnOnDemandRuleConnectionDomainAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnOnDemandRuleConnectionDomainAction extends Enum
{
    /**
    * The Enum VpnOnDemandRuleConnectionDomainAction
    */
    const CONNECT_IF_NEEDED = "connectIfNeeded";
    const NEVER_CONNECT = "neverConnect";
}