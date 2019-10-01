<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnLocalIdentifier File
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
* VpnLocalIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VpnLocalIdentifier extends Enum
{
    /**
    * The Enum VpnLocalIdentifier
    */
    const DEVICE_FQDN = "deviceFQDN";
    const GRAPHEMPTY = "empty";
    const CLIENT_CERTIFICATE_SUBJECT_NAME = "clientCertificateSubjectName";
}