<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivacyProfile File
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
* PrivacyProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PrivacyProfile extends Entity
{
    /**
    * Gets the contactEmail
    *
    * @return string The contactEmail
    */
    public function getContactEmail()
    {
        if (array_key_exists("contactEmail", $this->_propDict)) {
            return $this->_propDict["contactEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactEmail
    *
    * @param string $val The value of the contactEmail
    *
    * @return PrivacyProfile
    */
    public function setContactEmail($val)
    {
        $this->_propDict["contactEmail"] = $val;
        return $this;
    }
    /**
    * Gets the statementUrl
    *
    * @return string The statementUrl
    */
    public function getStatementUrl()
    {
        if (array_key_exists("statementUrl", $this->_propDict)) {
            return $this->_propDict["statementUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statementUrl
    *
    * @param string $val The value of the statementUrl
    *
    * @return PrivacyProfile
    */
    public function setStatementUrl($val)
    {
        $this->_propDict["statementUrl"] = $val;
        return $this;
    }
}
