<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADDevice File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* AzureADDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADDevice extends UpdatableAsset
{

     /** 
     * Gets the enrollments
     *
     * @return array The enrollments
     */
    public function getEnrollments()
    {
        if (array_key_exists("enrollments", $this->_propDict)) {
           return $this->_propDict["enrollments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enrollments
    *
    * @param UpdatableAssetEnrollment $val The enrollments
    *
    * @return AzureADDevice
    */
    public function setEnrollments($val)
    {
		$this->_propDict["enrollments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the errors
     *
     * @return array The errors
     */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
           return $this->_propDict["errors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the errors
    *
    * @param UpdatableAssetError $val The errors
    *
    * @return AzureADDevice
    */
    public function setErrors($val)
    {
		$this->_propDict["errors"] = $val;
        return $this;
    }
    
}
