<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EditionType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* Windows10EditionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10EditionType extends Enum
{
    /**
    * The Enum Windows10EditionType
    */
    const WINDOWS10_ENTERPRISE = "windows10Enterprise";
    const WINDOWS10_ENTERPRISE_N = "windows10EnterpriseN";
    const WINDOWS10_EDUCATION = "windows10Education";
    const WINDOWS10_EDUCATION_N = "windows10EducationN";
    const WINDOWS10_MOBILE_ENTERPRISE = "windows10MobileEnterprise";
    const WINDOWS10_HOLOGRAPHIC_ENTERPRISE = "windows10HolographicEnterprise";
    const WINDOWS10_PROFESSIONAL = "windows10Professional";
    const WINDOWS10_PROFESSIONAL_N = "windows10ProfessionalN";
    const WINDOWS10_PROFESSIONAL_EDUCATION = "windows10ProfessionalEducation";
    const WINDOWS10_PROFESSIONAL_EDUCATION_N = "windows10ProfessionalEducationN";
    const WINDOWS10_PROFESSIONAL_WORKSTATION = "windows10ProfessionalWorkstation";
    const WINDOWS10_PROFESSIONAL_WORKSTATION_N = "windows10ProfessionalWorkstationN";
    const NOT_CONFIGURED = "notConfigured";
    const WINDOWS10_HOME = "windows10Home";
    const WINDOWS10_HOME_CHINA = "windows10HomeChina";
    const WINDOWS10_HOME_N = "windows10HomeN";
    const WINDOWS10_HOME_SINGLE_LANGUAGE = "windows10HomeSingleLanguage";
    const WINDOWS10_MOBILE = "windows10Mobile";
    const WINDOWS10_IO_T_CORE = "windows10IoTCore";
    const WINDOWS10_IO_T_CORE_COMMERCIAL = "windows10IoTCoreCommercial";
}