<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Photo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Photo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Photo extends Entity
{
    /**
    * Gets the property dictionary of the Photo
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the cameraMake
    *
    * @return string The cameraMake
    */
    public function getCameraMake()
    {
        if (array_key_exists("cameraMake", $this->_propDict)) {
            return $this->_propDict["cameraMake"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cameraMake
    *
    * @param string $val The value of the cameraMake
    *
    * @return Photo
    */
    public function setCameraMake($val)
    {
        $this->_propDict["camera_make"] = $val;
        return $this;
    }
    
    /**
    * Gets the cameraModel
    *
    * @return string The cameraModel
    */
    public function getCameraModel()
    {
        if (array_key_exists("cameraModel", $this->_propDict)) {
            return $this->_propDict["cameraModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cameraModel
    *
    * @param string $val The value of the cameraModel
    *
    * @return Photo
    */
    public function setCameraModel($val)
    {
        $this->_propDict["camera_model"] = $val;
        return $this;
    }
    
    /**
    * Gets the exposureDenominator
    *
    * @return float The exposureDenominator
    */
    public function getExposureDenominator()
    {
        if (array_key_exists("exposureDenominator", $this->_propDict)) {
            return $this->_propDict["exposureDenominator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exposureDenominator
    *
    * @param float $val The value of the exposureDenominator
    *
    * @return Photo
    */
    public function setExposureDenominator($val)
    {
        $this->_propDict["exposure_denominator"] = $val;
        return $this;
    }
    
    /**
    * Gets the exposureNumerator
    *
    * @return float The exposureNumerator
    */
    public function getExposureNumerator()
    {
        if (array_key_exists("exposureNumerator", $this->_propDict)) {
            return $this->_propDict["exposureNumerator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exposureNumerator
    *
    * @param float $val The value of the exposureNumerator
    *
    * @return Photo
    */
    public function setExposureNumerator($val)
    {
        $this->_propDict["exposure_numerator"] = $val;
        return $this;
    }
    
    /**
    * Gets the focalLength
    *
    * @return float The focalLength
    */
    public function getFocalLength()
    {
        if (array_key_exists("focalLength", $this->_propDict)) {
            return $this->_propDict["focalLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the focalLength
    *
    * @param float $val The value of the focalLength
    *
    * @return Photo
    */
    public function setFocalLength($val)
    {
        $this->_propDict["focal_length"] = $val;
        return $this;
    }
    
    /**
    * Gets the fNumber
    *
    * @return float The fNumber
    */
    public function getFNumber()
    {
        if (array_key_exists("fNumber", $this->_propDict)) {
            return $this->_propDict["fNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fNumber
    *
    * @param float $val The value of the fNumber
    *
    * @return Photo
    */
    public function setFNumber($val)
    {
        $this->_propDict["f_number"] = $val;
        return $this;
    }

    /**
    * Gets the takenDateTime
    *
    * @return \DateTime The takenDateTime
    */
    public function getTakenDateTime()
    {
        if (array_key_exists("takenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["takenDateTime"], "\DateTime")) {
                return $this->_propDict["takenDateTime"];
            } else {
                $this->_propDict["takenDateTime"] = new \DateTime($this->_propDict["takenDateTime"]);
                return $this->_propDict["takenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the takenDateTime
    *
    * @param \DateTime $val The value to assign to the takenDateTime
    *
    * @return Photo The Photo
    */
    public function setTakenDateTime($val)
    {
        $this->_propDict["takenDateTime"] = $val;
         return $this;
    }
    
    /**
    * Gets the iso
    *
    * @return int The iso
    */
    public function getIso()
    {
        if (array_key_exists("iso", $this->_propDict)) {
            return $this->_propDict["iso"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iso
    *
    * @param int $val The value of the iso
    *
    * @return Photo
    */
    public function setIso($val)
    {
        $this->_propDict["iso"] = $val;
        return $this;
    }
}
