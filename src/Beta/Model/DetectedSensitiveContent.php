<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedSensitiveContent File
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
* DetectedSensitiveContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DetectedSensitiveContent extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return DetectedSensitiveContent
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return DetectedSensitiveContent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the uniqueCount
    *
    * @return int The uniqueCount
    */
    public function getUniqueCount()
    {
        if (array_key_exists("uniqueCount", $this->_propDict)) {
            return $this->_propDict["uniqueCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueCount
    *
    * @param int $val The value of the uniqueCount
    *
    * @return DetectedSensitiveContent
    */
    public function setUniqueCount($val)
    {
        $this->_propDict["uniqueCount"] = $val;
        return $this;
    }
    /**
    * Gets the confidence
    *
    * @return int The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidence
    *
    * @param int $val The value of the confidence
    *
    * @return DetectedSensitiveContent
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }

    /**
    * Gets the matches
    *
    * @return SensitiveContentLocation The matches
    */
    public function getMatches()
    {
        if (array_key_exists("matches", $this->_propDict)) {
            if (is_a($this->_propDict["matches"], "Microsoft\Graph\Beta\Model\SensitiveContentLocation")) {
                return $this->_propDict["matches"];
            } else {
                $this->_propDict["matches"] = new SensitiveContentLocation($this->_propDict["matches"]);
                return $this->_propDict["matches"];
            }
        }
        return null;
    }

    /**
    * Sets the matches
    *
    * @param SensitiveContentLocation $val The value to assign to the matches
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setMatches($val)
    {
        $this->_propDict["matches"] = $val;
         return $this;
    }
}
