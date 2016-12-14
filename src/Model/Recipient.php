<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Recipient File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Recipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Recipient extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * Recipient constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return Recipient
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the Recipient
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the emailAddress
    *
    * @return EmailAddress The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "EmailAddress")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddress($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }

    /**
    * Sets the emailAddress
    *
    * @param EmailAddress $val The value to assign to the emailAddress
    *
    * @return Recipient The Recipient
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
         return $this;
    }
}
