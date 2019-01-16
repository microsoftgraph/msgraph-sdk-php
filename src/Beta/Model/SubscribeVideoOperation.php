<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubscribeVideoOperation File
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

/**
* SubscribeVideoOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SubscribeVideoOperation extends CommsOperation
{
    /**
    * Gets the videoResolution
    *
    * @return VideoResolutionFormat The videoResolution
    */
    public function getVideoResolution()
    {
        if (array_key_exists("videoResolution", $this->_propDict)) {
            if (is_a($this->_propDict["videoResolution"], "Microsoft\Graph\Model\VideoResolutionFormat")) {
                return $this->_propDict["videoResolution"];
            } else {
                $this->_propDict["videoResolution"] = new VideoResolutionFormat($this->_propDict["videoResolution"]);
                return $this->_propDict["videoResolution"];
            }
        }
        return null;
    }
    
    /**
    * Sets the videoResolution
    *
    * @param VideoResolutionFormat $val The videoResolution
    *
    * @return SubscribeVideoOperation
    */
    public function setVideoResolution($val)
    {
        $this->_propDict["videoResolution"] = $val;
        return $this;
    }
    
    /**
    * Gets the modality
    *
    * @return Modality The modality
    */
    public function getModality()
    {
        if (array_key_exists("modality", $this->_propDict)) {
            if (is_a($this->_propDict["modality"], "Microsoft\Graph\Model\Modality")) {
                return $this->_propDict["modality"];
            } else {
                $this->_propDict["modality"] = new Modality($this->_propDict["modality"]);
                return $this->_propDict["modality"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modality
    *
    * @param Modality $val The modality
    *
    * @return SubscribeVideoOperation
    */
    public function setModality($val)
    {
        $this->_propDict["modality"] = $val;
        return $this;
    }
    
    /**
    * Gets the socketId
    *
    * @return int The socketId
    */
    public function getSocketId()
    {
        if (array_key_exists("socketId", $this->_propDict)) {
            return $this->_propDict["socketId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the socketId
    *
    * @param int $val The socketId
    *
    * @return SubscribeVideoOperation
    */
    public function setSocketId($val)
    {
        $this->_propDict["socketId"] = intval($val);
        return $this;
    }
    
}