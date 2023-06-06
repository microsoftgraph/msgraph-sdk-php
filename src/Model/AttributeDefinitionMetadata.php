<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeDefinitionMetadata File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AttributeDefinitionMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeDefinitionMetadata extends Enum
{
    /**
    * The Enum AttributeDefinitionMetadata
    */
    const BASE_ATTRIBUTE_NAME = "baseAttributeName";
    const COMPLEX_OBJECT_DEFINITION = "complexObjectDefinition";
    const IS_CONTAINER = "isContainer";
    const IS_CUSTOMER_DEFINED = "isCustomerDefined";
    const IS_DOMAIN_QUALIFIED = "isDomainQualified";
    const LINK_PROPERTY_NAMES = "linkPropertyNames";
    const LINK_TYPE_NAME = "linkTypeName";
    const MAXIMUM_LENGTH = "maximumLength";
    const REFERENCED_PROPERTY = "referencedProperty";
}
