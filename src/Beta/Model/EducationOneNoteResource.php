<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOneNoteResource File
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
* EducationOneNoteResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationOneNoteResource extends EducationResource
{
    /**
    * Gets the sectionName
    *
    * @return string The sectionName
    */
    public function getSectionName()
    {
        if (array_key_exists("sectionName", $this->_propDict)) {
            return $this->_propDict["sectionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sectionName
    *
    * @param string $val The value of the sectionName
    *
    * @return EducationOneNoteResource
    */
    public function setSectionName($val)
    {
        $this->_propDict["sectionName"] = $val;
        return $this;
    }
    /**
    * Gets the pageUrl
    *
    * @return string The pageUrl
    */
    public function getPageUrl()
    {
        if (array_key_exists("pageUrl", $this->_propDict)) {
            return $this->_propDict["pageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pageUrl
    *
    * @param string $val The value of the pageUrl
    *
    * @return EducationOneNoteResource
    */
    public function setPageUrl($val)
    {
        $this->_propDict["pageUrl"] = $val;
        return $this;
    }
}
