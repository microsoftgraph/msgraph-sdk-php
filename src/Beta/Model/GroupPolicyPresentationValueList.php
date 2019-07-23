<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationValueList File
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
* GroupPolicyPresentationValueList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GroupPolicyPresentationValueList extends GroupPolicyPresentationValue
{

     /** 
     * Gets the values
    * A list of pairs for the associated presentation.
     *
     * @return array The values
     */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
           return $this->_propDict["values"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the values
    * A list of pairs for the associated presentation.
    *
    * @param KeyValuePair $val The values
    *
    * @return GroupPolicyPresentationValueList
    */
    public function setValues($val)
    {
		$this->_propDict["values"] = $val;
        return $this;
    }
    
}