<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintDocument File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PrintDocument class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintDocument extends Entity
{
    /**
    * Gets the configuration
    *
    * @return PrinterDocumentConfiguration The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "Beta\Microsoft\Graph\Model\PrinterDocumentConfiguration")) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new PrinterDocumentConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configuration
    *
    * @param PrinterDocumentConfiguration $val The configuration
    *
    * @return PrintDocument
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentType
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentType
    *
    * @param string $val The contentType
    *
    * @return PrintDocument
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
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
    * @param string $val The displayName
    *
    * @return PrintDocument
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return PrintDocument
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    
}