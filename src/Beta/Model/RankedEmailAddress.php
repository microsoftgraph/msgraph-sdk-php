<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RankedEmailAddress File
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
* RankedEmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RankedEmailAddress extends Entity
{
    /**
    * Gets the address
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    *
    * @param string $val The value of the address
    *
    * @return RankedEmailAddress
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the rank
    *
    * @return float The rank
    */
    public function getRank()
    {
        if (array_key_exists("rank", $this->_propDict)) {
            return $this->_propDict["rank"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rank
    *
    * @param float $val The value of the rank
    *
    * @return RankedEmailAddress
    */
    public function setRank($val)
    {
        $this->_propDict["rank"] = $val;
        return $this;
    }
}
