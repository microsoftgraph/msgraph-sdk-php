<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UploadSession File
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
* UploadSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class UploadSession extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * UploadSession constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return UploadSession
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the UploadSession
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the uploadUrl
    *
    * @return string The uploadUrl
    */
    public function getUploadUrl()
    {
        if (array_key_exists("uploadUrl", $this->_propDict)) {
            return $this->_propDict["uploadUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uploadUrl
    *
    * @param string $val The value of the uploadUrl
    *
    * @return UploadSession
    */
    public function setUploadUrl($val)
    {
        $this->_propDict["upload_url"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The value to assign to the expirationDateTime
    *
    * @return UploadSession The UploadSession
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
         return $this;
    }
    
    /**
    * Gets the nextExpectedRanges
    *
    * @return string The nextExpectedRanges
    */
    public function getNextExpectedRanges()
    {
        if (array_key_exists("nextExpectedRanges", $this->_propDict)) {
            return $this->_propDict["nextExpectedRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextExpectedRanges
    *
    * @param string $val The value of the nextExpectedRanges
    *
    * @return UploadSession
    */
    public function setNextExpectedRanges($val)
    {
        $this->_propDict["next_expected_ranges"] = $val;
        return $this;
    }
}
