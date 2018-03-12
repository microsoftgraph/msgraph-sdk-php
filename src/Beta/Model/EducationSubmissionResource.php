<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSubmissionResource File
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
* EducationSubmissionResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationSubmissionResource extends Entity
{
    /**
    * Gets the resource
    *
    * @return EducationResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "Microsoft\Graph\Model\EducationResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new EducationResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    *
    * @param EducationResource $val The resource
    *
    * @return EducationSubmissionResource
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentResourceUrl
    *
    * @return string The assignmentResourceUrl
    */
    public function getAssignmentResourceUrl()
    {
        if (array_key_exists("assignmentResourceUrl", $this->_propDict)) {
            return $this->_propDict["assignmentResourceUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentResourceUrl
    *
    * @param string $val The assignmentResourceUrl
    *
    * @return EducationSubmissionResource
    */
    public function setAssignmentResourceUrl($val)
    {
        $this->_propDict["assignmentResourceUrl"] = $val;
        return $this;
    }
    
}