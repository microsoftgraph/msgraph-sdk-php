<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AverageComparativeScore File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* AverageComparativeScore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AverageComparativeScore extends Entity
{
    /**
    * Gets the averageScore
    *
    * @return float The averageScore
    */
    public function getAverageScore()
    {
        if (array_key_exists("averageScore", $this->_propDict)) {
            return $this->_propDict["averageScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageScore
    *
    * @param float $val The value of the averageScore
    *
    * @return AverageComparativeScore
    */
    public function setAverageScore($val)
    {
        $this->_propDict["averageScore"] = $val;
        return $this;
    }
    /**
    * Gets the basis
    *
    * @return string The basis
    */
    public function getBasis()
    {
        if (array_key_exists("basis", $this->_propDict)) {
            return $this->_propDict["basis"];
        } else {
            return null;
        }
    }

    /**
    * Sets the basis
    *
    * @param string $val The value of the basis
    *
    * @return AverageComparativeScore
    */
    public function setBasis($val)
    {
        $this->_propDict["basis"] = $val;
        return $this;
    }
}
