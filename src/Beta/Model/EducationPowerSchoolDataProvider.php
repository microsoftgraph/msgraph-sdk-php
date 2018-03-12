<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationPowerSchoolDataProvider File
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
* EducationPowerSchoolDataProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationPowerSchoolDataProvider extends EducationSynchronizationDataProvider
{
    /**
    * Gets the connectionUrl
    *
    * @return string The connectionUrl
    */
    public function getConnectionUrl()
    {
        if (array_key_exists("connectionUrl", $this->_propDict)) {
            return $this->_propDict["connectionUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionUrl
    *
    * @param string $val The value of the connectionUrl
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setConnectionUrl($val)
    {
        $this->_propDict["connectionUrl"] = $val;
        return $this;
    }
    /**
    * Gets the clientId
    *
    * @return string The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientId
    *
    * @param string $val The value of the clientId
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    /**
    * Gets the clientSecret
    *
    * @return string The clientSecret
    */
    public function getClientSecret()
    {
        if (array_key_exists("clientSecret", $this->_propDict)) {
            return $this->_propDict["clientSecret"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientSecret
    *
    * @param string $val The value of the clientSecret
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }
    /**
    * Gets the schoolsIds
    *
    * @return string The schoolsIds
    */
    public function getSchoolsIds()
    {
        if (array_key_exists("schoolsIds", $this->_propDict)) {
            return $this->_propDict["schoolsIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schoolsIds
    *
    * @param string $val The value of the schoolsIds
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setSchoolsIds($val)
    {
        $this->_propDict["schoolsIds"] = $val;
        return $this;
    }
    /**
    * Gets the schoolYear
    *
    * @return string The schoolYear
    */
    public function getSchoolYear()
    {
        if (array_key_exists("schoolYear", $this->_propDict)) {
            return $this->_propDict["schoolYear"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schoolYear
    *
    * @param string $val The value of the schoolYear
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setSchoolYear($val)
    {
        $this->_propDict["schoolYear"] = $val;
        return $this;
    }
    /**
    * Gets the allowTeachersInMultipleSchools
    *
    * @return bool The allowTeachersInMultipleSchools
    */
    public function getAllowTeachersInMultipleSchools()
    {
        if (array_key_exists("allowTeachersInMultipleSchools", $this->_propDict)) {
            return $this->_propDict["allowTeachersInMultipleSchools"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowTeachersInMultipleSchools
    *
    * @param bool $val The value of the allowTeachersInMultipleSchools
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setAllowTeachersInMultipleSchools($val)
    {
        $this->_propDict["allowTeachersInMultipleSchools"] = $val;
        return $this;
    }

    /**
    * Gets the customizations
    *
    * @return EducationSynchronizationCustomizations The customizations
    */
    public function getCustomizations()
    {
        if (array_key_exists("customizations", $this->_propDict)) {
            if (is_a($this->_propDict["customizations"], "Microsoft\Graph\Beta\Model\EducationSynchronizationCustomizations")) {
                return $this->_propDict["customizations"];
            } else {
                $this->_propDict["customizations"] = new EducationSynchronizationCustomizations($this->_propDict["customizations"]);
                return $this->_propDict["customizations"];
            }
        }
        return null;
    }

    /**
    * Sets the customizations
    *
    * @param EducationSynchronizationCustomizations $val The value to assign to the customizations
    *
    * @return EducationPowerSchoolDataProvider The EducationPowerSchoolDataProvider
    */
    public function setCustomizations($val)
    {
        $this->_propDict["customizations"] = $val;
         return $this;
    }
}
