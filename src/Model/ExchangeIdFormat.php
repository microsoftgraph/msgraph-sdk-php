<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExchangeIdFormat File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ExchangeIdFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ExchangeIdFormat extends Enum
{
    /**
    * The Enum ExchangeIdFormat
    */
    const ENTRY_ID = "entryId";
    const EWS_ID = "ewsId";
    const IMMUTABLE_ENTRY_ID = "immutableEntryId";
    const REST_ID = "restId";
    const REST_IMMUTABLE_ENTRY_ID = "restImmutableEntryId";
}