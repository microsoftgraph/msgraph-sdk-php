<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileHash File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* FileHash class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileHash extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the algorithm
    *
    * @return FileHashAlgorithm|null The algorithm
    */
    public function getAlgorithm()
    {
        if (array_key_exists("algorithm", $this->_propDict)) {
            if (is_a($this->_propDict["algorithm"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FileHashAlgorithm") || is_null($this->_propDict["algorithm"])) {
                return $this->_propDict["algorithm"];
            } else {
                $this->_propDict["algorithm"] = new FileHashAlgorithm($this->_propDict["algorithm"]);
                return $this->_propDict["algorithm"];
            }
        }
        return null;
    }

    /**
    * Sets the algorithm
    *
    * @param FileHashAlgorithm $val The value to assign to the algorithm
    *
    * @return FileHash The FileHash
    */
    public function setAlgorithm($val)
    {
        $this->_propDict["algorithm"] = $val;
         return $this;
    }
    /**
    * Gets the value
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value of the value
    *
    * @return FileHash
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
