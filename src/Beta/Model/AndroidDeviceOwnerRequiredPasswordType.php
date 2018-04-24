<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerRequiredPasswordType File
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
* AndroidDeviceOwnerRequiredPasswordType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceOwnerRequiredPasswordType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerRequiredPasswordType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const REQUIRED = "required";
    const NUMERIC = "numeric";
    const NUMERIC_COMPLEX = "numericComplex";
    const ALPHABETIC = "alphabetic";
    const ALPHANUMERIC = "alphanumeric";
    const ALPHANUMERIC_WITH_SYMBOLS = "alphanumericWithSymbols";
}