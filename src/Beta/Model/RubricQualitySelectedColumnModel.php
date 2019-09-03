<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RubricQualitySelectedColumnModel File
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
* RubricQualitySelectedColumnModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RubricQualitySelectedColumnModel extends Entity
{
    /**
    * Gets the qualityId
    *
    * @return string The qualityId
    */
    public function getQualityId()
    {
        if (array_key_exists("qualityId", $this->_propDict)) {
            return $this->_propDict["qualityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qualityId
    *
    * @param string $val The value of the qualityId
    *
    * @return RubricQualitySelectedColumnModel
    */
    public function setQualityId($val)
    {
        $this->_propDict["qualityId"] = $val;
        return $this;
    }
    /**
    * Gets the columnId
    *
    * @return string The columnId
    */
    public function getColumnId()
    {
        if (array_key_exists("columnId", $this->_propDict)) {
            return $this->_propDict["columnId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the columnId
    *
    * @param string $val The value of the columnId
    *
    * @return RubricQualitySelectedColumnModel
    */
    public function setColumnId($val)
    {
        $this->_propDict["columnId"] = $val;
        return $this;
    }
}
