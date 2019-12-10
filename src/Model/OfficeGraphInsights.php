<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeGraphInsights File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* OfficeGraphInsights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OfficeGraphInsights extends Entity
{

     /** 
     * Gets the trending
    * Calculated relationship identifying trending documents. Trending documents can be stored in OneDrive or in SharePoint sites.
     *
     * @return array The trending
     */
    public function getTrending()
    {
        if (array_key_exists("trending", $this->_propDict)) {
           return $this->_propDict["trending"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the trending
    * Calculated relationship identifying trending documents. Trending documents can be stored in OneDrive or in SharePoint sites.
    *
    * @param Trending $val The trending
    *
    * @return OfficeGraphInsights
    */
    public function setTrending($val)
    {
		$this->_propDict["trending"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shared
    * Calculated relationship identifying documents shared with a user. Documents can be shared as email attachments or as OneDrive for Business links sent in emails.
     *
     * @return array The shared
     */
    public function getShared()
    {
        if (array_key_exists("shared", $this->_propDict)) {
           return $this->_propDict["shared"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shared
    * Calculated relationship identifying documents shared with a user. Documents can be shared as email attachments or as OneDrive for Business links sent in emails.
    *
    * @param SharedInsight $val The shared
    *
    * @return OfficeGraphInsights
    */
    public function setShared($val)
    {
		$this->_propDict["shared"] = $val;
        return $this;
    }
    

     /** 
     * Gets the used
    * Calculated relationship identifying documents viewed and modified by a user. Includes documents the user used in OneDrive for Business, SharePoint, opened as email attachments, and as link attachments from sources like Box, DropBox and Google Drive.
     *
     * @return array The used
     */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
           return $this->_propDict["used"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the used
    * Calculated relationship identifying documents viewed and modified by a user. Includes documents the user used in OneDrive for Business, SharePoint, opened as email attachments, and as link attachments from sources like Box, DropBox and Google Drive.
    *
    * @param UsedInsight $val The used
    *
    * @return OfficeGraphInsights
    */
    public function setUsed($val)
    {
		$this->_propDict["used"] = $val;
        return $this;
    }
    
}