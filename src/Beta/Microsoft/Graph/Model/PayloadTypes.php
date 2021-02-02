<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadTypes File
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
* PayloadTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadTypes extends Entity
{
    /**
    * Gets the rawContent
    *
    * @return string The rawContent
    */
    public function getRawContent()
    {
        if (array_key_exists("rawContent", $this->_propDict)) {
            return $this->_propDict["rawContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rawContent
    *
    * @param string $val The value of the rawContent
    *
    * @return PayloadTypes
    */
    public function setRawContent($val)
    {
        $this->_propDict["rawContent"] = $val;
        return $this;
    }

    /**
    * Gets the visualContent
    *
    * @return VisualProperties The visualContent
    */
    public function getVisualContent()
    {
        if (array_key_exists("visualContent", $this->_propDict)) {
            if (is_a($this->_propDict["visualContent"], "Beta\Microsoft\Graph\Model\VisualProperties")) {
                return $this->_propDict["visualContent"];
            } else {
                $this->_propDict["visualContent"] = new VisualProperties($this->_propDict["visualContent"]);
                return $this->_propDict["visualContent"];
            }
        }
        return null;
    }

    /**
    * Sets the visualContent
    *
    * @param VisualProperties $val The value to assign to the visualContent
    *
    * @return PayloadTypes The PayloadTypes
    */
    public function setVisualContent($val)
    {
        $this->_propDict["visualContent"] = $val;
         return $this;
    }
}
