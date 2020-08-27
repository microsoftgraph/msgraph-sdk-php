<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonAnnotation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PersonAnnotation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonAnnotation extends ItemFacet
{
    /**
    * Gets the detail
    *
    * @return ItemBody The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "Beta\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new ItemBody($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detail
    *
    * @param ItemBody $val The detail
    *
    * @return PersonAnnotation
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
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
    * @return PersonAnnotation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}