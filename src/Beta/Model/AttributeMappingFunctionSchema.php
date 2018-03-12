<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMappingFunctionSchema File
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
* AttributeMappingFunctionSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AttributeMappingFunctionSchema extends Entity
{

     /** 
     * Gets the parameters
     *
     * @return array The parameters
     */
    public function getParameters()
    {
        if (array_key_exists("parameters", $this->_propDict)) {
           return $this->_propDict["parameters"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the parameters
    *
    * @param AttributeMappingParameterSchema $val The parameters
    *
    * @return AttributeMappingFunctionSchema
    */
    public function setParameters($val)
    {
		$this->_propDict["parameters"] = $val;
        return $this;
    }
    
}