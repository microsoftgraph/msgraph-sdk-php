<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeProductId File
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
* OfficeProductId class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OfficeProductId extends Enum
{
    /**
    * The Enum OfficeProductId
    */
    const O365_PRO_PLUS_RETAIL = "o365ProPlusRetail";
    const O365_BUSINESS_RETAIL = "o365BusinessRetail";
    const VISIO_PRO_RETAIL = "visioProRetail";
    const PROJECT_PRO_RETAIL = "projectProRetail";
}