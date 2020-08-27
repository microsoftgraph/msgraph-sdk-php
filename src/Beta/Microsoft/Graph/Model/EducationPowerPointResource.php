<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationPowerPointResource File
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
* EducationPowerPointResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationPowerPointResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationPowerPointResource");
    }

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
    * @return EducationPowerPointResource
    */
    public function setFileUrl($val)
    {
        $this->_propDict["fileUrl"] = $val;
        return $this;
    }
}
