<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosEduDeviceConfiguration File
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

/**
* IosEduDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosEduDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the teacherCertificateSettings
    *
    * @return IosEduCertificateSettings The teacherCertificateSettings
    */
    public function getTeacherCertificateSettings()
    {
        if (array_key_exists("teacherCertificateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["teacherCertificateSettings"], "Microsoft\Graph\Beta\Model\IosEduCertificateSettings")) {
                return $this->_propDict["teacherCertificateSettings"];
            } else {
                $this->_propDict["teacherCertificateSettings"] = new IosEduCertificateSettings($this->_propDict["teacherCertificateSettings"]);
                return $this->_propDict["teacherCertificateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teacherCertificateSettings
    *
    * @param IosEduCertificateSettings $val The teacherCertificateSettings
    *
    * @return IosEduDeviceConfiguration
    */
    public function setTeacherCertificateSettings($val)
    {
        $this->_propDict["teacherCertificateSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the studentCertificateSettings
    *
    * @return IosEduCertificateSettings The studentCertificateSettings
    */
    public function getStudentCertificateSettings()
    {
        if (array_key_exists("studentCertificateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["studentCertificateSettings"], "Microsoft\Graph\Beta\Model\IosEduCertificateSettings")) {
                return $this->_propDict["studentCertificateSettings"];
            } else {
                $this->_propDict["studentCertificateSettings"] = new IosEduCertificateSettings($this->_propDict["studentCertificateSettings"]);
                return $this->_propDict["studentCertificateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the studentCertificateSettings
    *
    * @param IosEduCertificateSettings $val The studentCertificateSettings
    *
    * @return IosEduDeviceConfiguration
    */
    public function setStudentCertificateSettings($val)
    {
        $this->_propDict["studentCertificateSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCertificateSettings
    *
    * @return IosEduCertificateSettings The deviceCertificateSettings
    */
    public function getDeviceCertificateSettings()
    {
        if (array_key_exists("deviceCertificateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCertificateSettings"], "Microsoft\Graph\Beta\Model\IosEduCertificateSettings")) {
                return $this->_propDict["deviceCertificateSettings"];
            } else {
                $this->_propDict["deviceCertificateSettings"] = new IosEduCertificateSettings($this->_propDict["deviceCertificateSettings"]);
                return $this->_propDict["deviceCertificateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCertificateSettings
    *
    * @param IosEduCertificateSettings $val The deviceCertificateSettings
    *
    * @return IosEduDeviceConfiguration
    */
    public function setDeviceCertificateSettings($val)
    {
        $this->_propDict["deviceCertificateSettings"] = $val;
        return $this;
    }
    
}