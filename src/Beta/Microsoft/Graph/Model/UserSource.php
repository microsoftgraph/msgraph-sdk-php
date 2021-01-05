<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSource File
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
* UserSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSource extends DataSource
{
    /**
    * Gets the email
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    *
    * @param string $val The email
    *
    * @return UserSource
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the includedSources
    *
    * @return SourceType The includedSources
    */
    public function getIncludedSources()
    {
        if (array_key_exists("includedSources", $this->_propDict)) {
            if (is_a($this->_propDict["includedSources"], "Beta\Microsoft\Graph\Model\SourceType")) {
                return $this->_propDict["includedSources"];
            } else {
                $this->_propDict["includedSources"] = new SourceType($this->_propDict["includedSources"]);
                return $this->_propDict["includedSources"];
            }
        }
        return null;
    }
    
    /**
    * Sets the includedSources
    *
    * @param SourceType $val The includedSources
    *
    * @return UserSource
    */
    public function setIncludedSources($val)
    {
        $this->_propDict["includedSources"] = $val;
        return $this;
    }
    
}