<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationWordResource File
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
* EducationWordResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationWordResource extends EducationResource
{
    /**
    * Gets the fileUrl
    *
    * @return string The fileUrl
    */
    public function getFileUrl()
    {
        if (array_key_exists("fileUrl", $this->_propDict)) {
            return $this->_propDict["fileUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileUrl
    *
    * @param string $val The value of the fileUrl
    *
    * @return EducationWordResource
    */
    public function setFileUrl($val)
    {
        $this->_propDict["fileUrl"] = $val;
        return $this;
    }
}
