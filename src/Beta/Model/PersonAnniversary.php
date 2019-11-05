<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonAnniversary File
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
* PersonAnniversary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PersonAnniversary extends ItemFacet
{
    /**
    * Gets the type
    *
    * @return AnniversaryType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\AnniversaryType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AnniversaryType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    *
    * @param AnniversaryType $val The type
    *
    * @return PersonAnniversary
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the date
    *
    * @return \DateTime The date
    */
    public function getDate()
    {
        if (array_key_exists("date", $this->_propDict)) {
            if (is_a($this->_propDict["date"], "\DateTime")) {
                return $this->_propDict["date"];
            } else {
                $this->_propDict["date"] = new \DateTime($this->_propDict["date"]);
                return $this->_propDict["date"];
            }
        }
        return null;
    }
    
    /**
    * Sets the date
    *
    * @param \DateTime $val The date
    *
    * @return PersonAnniversary
    */
    public function setDate($val)
    {
        $this->_propDict["date"] = $val;
        return $this;
    }
    
}