<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpRange File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* IpRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpRange extends RuleDestination
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.networkaccess.ipRange");
    }

    /**
    * Gets the beginAddress
    * Specifies the starting IP address of the IP range.
    *
    * @return string|null The beginAddress
    */
    public function getBeginAddress()
    {
        if (array_key_exists("beginAddress", $this->_propDict)) {
            return $this->_propDict["beginAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the beginAddress
    * Specifies the starting IP address of the IP range.
    *
    * @param string $val The value of the beginAddress
    *
    * @return IpRange
    */
    public function setBeginAddress($val)
    {
        $this->_propDict["beginAddress"] = $val;
        return $this;
    }
    /**
    * Gets the endAddress
    * Specifies the ending IP address of the IP range.
    *
    * @return string|null The endAddress
    */
    public function getEndAddress()
    {
        if (array_key_exists("endAddress", $this->_propDict)) {
            return $this->_propDict["endAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endAddress
    * Specifies the ending IP address of the IP range.
    *
    * @param string $val The value of the endAddress
    *
    * @return IpRange
    */
    public function setEndAddress($val)
    {
        $this->_propDict["endAddress"] = $val;
        return $this;
    }
}
