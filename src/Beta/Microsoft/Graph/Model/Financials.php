<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Financials File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Financials class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Financials extends 
{

     /** 
     * Gets the companies
     *
     * @return array The companies
     */
    public function getCompanies()
    {
        if (array_key_exists("companies", $this->_propDict)) {
           return $this->_propDict["companies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the companies
    *
    * @param Company $val The companies
    *
    * @return Financials
    */
    public function setCompanies($val)
    {
		$this->_propDict["companies"] = $val;
        return $this;
    }
    
}