<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SingleServicePrincipal File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SingleServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SingleServicePrincipal extends SubjectSet
{
    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return SingleServicePrincipal
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalId
    *
    * @return string|null The servicePrincipalId
    */
    public function getServicePrincipalId()
    {
        if (array_key_exists("servicePrincipalId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalId
    *
    * @param string $val The value of the servicePrincipalId
    *
    * @return SingleServicePrincipal
    */
    public function setServicePrincipalId($val)
    {
        $this->_propDict["servicePrincipalId"] = $val;
        return $this;
    }
}
