<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RootDomains File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* RootDomains class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RootDomains extends Enum
{
    /**
    * The Enum RootDomains
    */
    const NONE = "none";
    const ALL = "all";
    const ALL_FEDERATED = "allFederated";
    const ALL_MANAGED = "allManaged";
    const ENUMERATED = "enumerated";
    const ALL_MANAGED_AND_ENUMERATED_FEDERATED = "allManagedAndEnumeratedFederated";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
