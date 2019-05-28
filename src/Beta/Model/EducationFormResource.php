<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFormResource File
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
* EducationFormResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationFormResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationFormResource");
    }

    /**
    * Gets the originalFormId
    *
    * @return string The originalFormId
    */
    public function getOriginalFormId()
    {
        if (array_key_exists("originalFormId", $this->_propDict)) {
            return $this->_propDict["originalFormId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originalFormId
    *
    * @param string $val The value of the originalFormId
    *
    * @return EducationFormResource
    */
    public function setOriginalFormId($val)
    {
        $this->_propDict["originalFormId"] = $val;
        return $this;
    }
    /**
    * Gets the formId
    *
    * @return string The formId
    */
    public function getFormId()
    {
        if (array_key_exists("formId", $this->_propDict)) {
            return $this->_propDict["formId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formId
    *
    * @param string $val The value of the formId
    *
    * @return EducationFormResource
    */
    public function setFormId($val)
    {
        $this->_propDict["formId"] = $val;
        return $this;
    }
    /**
    * Gets the isGroupForm
    *
    * @return bool The isGroupForm
    */
    public function getIsGroupForm()
    {
        if (array_key_exists("isGroupForm", $this->_propDict)) {
            return $this->_propDict["isGroupForm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isGroupForm
    *
    * @param bool $val The value of the isGroupForm
    *
    * @return EducationFormResource
    */
    public function setIsGroupForm($val)
    {
        $this->_propDict["isGroupForm"] = $val;
        return $this;
    }
    /**
    * Gets the viewUrl
    *
    * @return string The viewUrl
    */
    public function getViewUrl()
    {
        if (array_key_exists("viewUrl", $this->_propDict)) {
            return $this->_propDict["viewUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the viewUrl
    *
    * @param string $val The value of the viewUrl
    *
    * @return EducationFormResource
    */
    public function setViewUrl($val)
    {
        $this->_propDict["viewUrl"] = $val;
        return $this;
    }
    /**
    * Gets the editUrl
    *
    * @return string The editUrl
    */
    public function getEditUrl()
    {
        if (array_key_exists("editUrl", $this->_propDict)) {
            return $this->_propDict["editUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the editUrl
    *
    * @param string $val The value of the editUrl
    *
    * @return EducationFormResource
    */
    public function setEditUrl($val)
    {
        $this->_propDict["editUrl"] = $val;
        return $this;
    }
}
