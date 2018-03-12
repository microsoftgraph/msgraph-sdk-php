<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectNameFormat File
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
* SubjectNameFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SubjectNameFormat extends Enum
{
    /**
    * The Enum SubjectNameFormat
    */
    const COMMON_NAME = "commonName";
    const COMMON_NAME_INCLUDING_EMAIL = "commonNameIncludingEmail";
    const COMMON_NAME_AS_EMAIL = "commonNameAsEmail";
    const CUSTOM = "custom";
    const COMMON_NAME_AS_IMEI = "commonNameAsIMEI";
    const COMMON_NAME_AS_SERIAL_NUMBER = "commonNameAsSerialNumber";
}