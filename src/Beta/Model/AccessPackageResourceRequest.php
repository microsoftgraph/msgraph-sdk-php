<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceRequest File
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

/**
* AccessPackageResourceRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AccessPackageResourceRequest extends Entity
{
    /**
    * Gets the catalogId
    *
    * @return string The catalogId
    */
    public function getCatalogId()
    {
        if (array_key_exists("catalogId", $this->_propDict)) {
            return $this->_propDict["catalogId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogId
    *
    * @param string $val The catalogId
    *
    * @return AccessPackageResourceRequest
    */
    public function setCatalogId($val)
    {
        $this->_propDict["catalogId"] = $val;
        return $this;
    }
    
    /**
    * Gets the executeImmediately
    *
    * @return bool The executeImmediately
    */
    public function getExecuteImmediately()
    {
        if (array_key_exists("executeImmediately", $this->_propDict)) {
            return $this->_propDict["executeImmediately"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the executeImmediately
    *
    * @param bool $val The executeImmediately
    *
    * @return AccessPackageResourceRequest
    */
    public function setExecuteImmediately($val)
    {
        $this->_propDict["executeImmediately"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isValidationOnly
    *
    * @return bool The isValidationOnly
    */
    public function getIsValidationOnly()
    {
        if (array_key_exists("isValidationOnly", $this->_propDict)) {
            return $this->_propDict["isValidationOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isValidationOnly
    *
    * @param bool $val The isValidationOnly
    *
    * @return AccessPackageResourceRequest
    */
    public function setIsValidationOnly($val)
    {
        $this->_propDict["isValidationOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requestType
    *
    * @return string The requestType
    */
    public function getRequestType()
    {
        if (array_key_exists("requestType", $this->_propDict)) {
            return $this->_propDict["requestType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestType
    *
    * @param string $val The requestType
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestType($val)
    {
        $this->_propDict["requestType"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestState
    *
    * @return string The requestState
    */
    public function getRequestState()
    {
        if (array_key_exists("requestState", $this->_propDict)) {
            return $this->_propDict["requestState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestState
    *
    * @param string $val The requestState
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestState($val)
    {
        $this->_propDict["requestState"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestStatus
    *
    * @return string The requestStatus
    */
    public function getRequestStatus()
    {
        if (array_key_exists("requestStatus", $this->_propDict)) {
            return $this->_propDict["requestStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestStatus
    *
    * @param string $val The requestStatus
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestStatus($val)
    {
        $this->_propDict["requestStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the justification
    *
    * @return string The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the justification
    *
    * @param string $val The justification
    *
    * @return AccessPackageResourceRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
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
    * @param \DateTime $val The expirationDateTime
    *
    * @return AccessPackageResourceRequest
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageResource
    *
    * @return AccessPackageResource The accessPackageResource
    */
    public function getAccessPackageResource()
    {
        if (array_key_exists("accessPackageResource", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResource"], "Microsoft\Graph\Beta\Model\AccessPackageResource")) {
                return $this->_propDict["accessPackageResource"];
            } else {
                $this->_propDict["accessPackageResource"] = new AccessPackageResource($this->_propDict["accessPackageResource"]);
                return $this->_propDict["accessPackageResource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageResource
    *
    * @param AccessPackageResource $val The accessPackageResource
    *
    * @return AccessPackageResourceRequest
    */
    public function setAccessPackageResource($val)
    {
        $this->_propDict["accessPackageResource"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestor
    *
    * @return AccessPackageSubject The requestor
    */
    public function getRequestor()
    {
        if (array_key_exists("requestor", $this->_propDict)) {
            if (is_a($this->_propDict["requestor"], "Microsoft\Graph\Beta\Model\AccessPackageSubject")) {
                return $this->_propDict["requestor"];
            } else {
                $this->_propDict["requestor"] = new AccessPackageSubject($this->_propDict["requestor"]);
                return $this->_propDict["requestor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestor
    *
    * @param AccessPackageSubject $val The requestor
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestor($val)
    {
        $this->_propDict["requestor"] = $val;
        return $this;
    }
    
}