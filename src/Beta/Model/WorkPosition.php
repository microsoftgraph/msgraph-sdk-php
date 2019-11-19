<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkPosition File
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
* WorkPosition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkPosition extends ItemFacet
{
    /**
    * Gets the categories
    *
    * @return string The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the categories
    *
    * @param string $val The categories
    *
    * @return WorkPosition
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    
    /**
    * Gets the detail
    *
    * @return PositionDetail The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "Microsoft\Graph\Beta\Model\PositionDetail")) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new PositionDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detail
    *
    * @param PositionDetail $val The detail
    *
    * @return WorkPosition
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }
    
}