<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NumberRange File
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
* NumberRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class NumberRange extends Entity
{
    /**
    * Gets the lowerNumber
    *
    * @return int The lowerNumber
    */
    public function getLowerNumber()
    {
        if (array_key_exists("lowerNumber", $this->_propDict)) {
            return $this->_propDict["lowerNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowerNumber
    *
    * @param int $val The value of the lowerNumber
    *
    * @return NumberRange
    */
    public function setLowerNumber($val)
    {
        $this->_propDict["lowerNumber"] = $val;
        return $this;
    }
    /**
    * Gets the upperNumber
    *
    * @return int The upperNumber
    */
    public function getUpperNumber()
    {
        if (array_key_exists("upperNumber", $this->_propDict)) {
            return $this->_propDict["upperNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upperNumber
    *
    * @param int $val The value of the upperNumber
    *
    * @return NumberRange
    */
    public function setUpperNumber($val)
    {
        $this->_propDict["upperNumber"] = $val;
        return $this;
    }
}
