<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnumeratedDomains File
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
* EnumeratedDomains class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnumeratedDomains extends ValidatingDomains
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.enumeratedDomains");
    }

    /**
    * Gets the domainNames
    *
    * @return string|null The domainNames
    */
    public function getDomainNames()
    {
        if (array_key_exists("domainNames", $this->_propDict)) {
            return $this->_propDict["domainNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainNames
    *
    * @param string $val The value of the domainNames
    *
    * @return EnumeratedDomains
    */
    public function setDomainNames($val)
    {
        $this->_propDict["domainNames"] = $val;
        return $this;
    }
}
