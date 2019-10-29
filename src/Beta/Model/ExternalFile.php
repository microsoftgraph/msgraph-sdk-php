<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalFile File
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
* ExternalFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ExternalFile extends ExternalItem
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ExternalFile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ExternalFile
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return string The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the createdBy
    *
    * @param string $val The createdBy
    *
    * @return ExternalFile
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    *
    * @return string The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastModifiedBy
    *
    * @param string $val The lastModifiedBy
    *
    * @return ExternalFile
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return ExternalFile
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    *
    * @param string $val The url
    *
    * @return ExternalFile
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ExternalFile
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the extension
    *
    * @return string The extension
    */
    public function getExtension()
    {
        if (array_key_exists("extension", $this->_propDict)) {
            return $this->_propDict["extension"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the extension
    *
    * @param string $val The extension
    *
    * @return ExternalFile
    */
    public function setExtension($val)
    {
        $this->_propDict["extension"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    *
    * @param int $val The size
    *
    * @return ExternalFile
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    
}