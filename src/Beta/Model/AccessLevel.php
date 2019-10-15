<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessLevel File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* AccessLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AccessLevel extends Enum
{
    /**
    * The Enum AccessLevel
    */
    const EVERYONE = "everyone";
    const INVITED = "invited";
    const LOCKED = "locked";
    const SAME_ENTERPRISE = "sameEnterprise";
    const SAME_ENTERPRISE_AND_FEDERATED = "sameEnterpriseAndFederated";
}