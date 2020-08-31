<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MdmAppConfigKeyType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* MdmAppConfigKeyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MdmAppConfigKeyType extends Enum
{
    /**
    * The Enum MdmAppConfigKeyType
    */
    const STRING_TYPE = "stringType";
    const INTEGER_TYPE = "integerType";
    const REAL_TYPE = "realType";
    const BOOLEAN_TYPE = "booleanType";
    const TOKEN_TYPE = "tokenType";
}