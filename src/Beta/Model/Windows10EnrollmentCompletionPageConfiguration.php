<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EnrollmentCompletionPageConfiguration File
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
* Windows10EnrollmentCompletionPageConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10EnrollmentCompletionPageConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return Windows10EnrollmentCompletionPageConfiguration
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the bodyText
    *
    * @return string The bodyText
    */
    public function getBodyText()
    {
        if (array_key_exists("bodyText", $this->_propDict)) {
            return $this->_propDict["bodyText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bodyText
    *
    * @param string $val The bodyText
    *
    * @return Windows10EnrollmentCompletionPageConfiguration
    */
    public function setBodyText($val)
    {
        $this->_propDict["bodyText"] = $val;
        return $this;
    }
    
    /**
    * Gets the moreInfoUrl
    *
    * @return string The moreInfoUrl
    */
    public function getMoreInfoUrl()
    {
        if (array_key_exists("moreInfoUrl", $this->_propDict)) {
            return $this->_propDict["moreInfoUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the moreInfoUrl
    *
    * @param string $val The moreInfoUrl
    *
    * @return Windows10EnrollmentCompletionPageConfiguration
    */
    public function setMoreInfoUrl($val)
    {
        $this->_propDict["moreInfoUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the moreInfoText
    *
    * @return string The moreInfoText
    */
    public function getMoreInfoText()
    {
        if (array_key_exists("moreInfoText", $this->_propDict)) {
            return $this->_propDict["moreInfoText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the moreInfoText
    *
    * @param string $val The moreInfoText
    *
    * @return Windows10EnrollmentCompletionPageConfiguration
    */
    public function setMoreInfoText($val)
    {
        $this->_propDict["moreInfoText"] = $val;
        return $this;
    }
    
}