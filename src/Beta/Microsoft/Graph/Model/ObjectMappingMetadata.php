<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObjectMappingMetadata File
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
* ObjectMappingMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ObjectMappingMetadata extends Enum
{
    /**
    * The Enum ObjectMappingMetadata
    */
    const ESCROW_BEHAVIOR = "escrowBehavior";
    const DISABLE_MONITORING_FOR_CHANGES = "disableMonitoringForChanges";
    const ORIGINAL_JOINING_PROPERTY = "originalJoiningProperty";
    const DISPOSITION = "disposition";
    const IS_CUSTOMER_DEFINED = "isCustomerDefined";
    const EXCLUDE_FROM_REPORTING = "excludeFromReporting";
    const UNSYNCHRONIZED = "unsynchronized";
}
