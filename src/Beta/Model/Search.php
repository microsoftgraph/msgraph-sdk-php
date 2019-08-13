<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Search File
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
* Search class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Search extends Entity
{

     /** 
     * Gets the value
     *
     * @return array The value
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
    * @param SearchResponse $val The value
    *
    * @return Search
    */
    public function setValue($val)
    {
		$this->_propDict["value"] = $val;
        return $this;
    }
    

     /** 
     * Gets the requests
     *
     * @return array The requests
     */
    public function getRequests()
    {
        if (array_key_exists("requests", $this->_propDict)) {
           return $this->_propDict["requests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the requests
    *
    * @param SearchRequest $val The requests
    *
    * @return Search
    */
    public function setRequests($val)
    {
		$this->_propDict["requests"] = $val;
        return $this;
    }
    
}