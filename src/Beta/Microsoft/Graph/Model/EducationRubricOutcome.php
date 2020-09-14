<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationRubricOutcome File
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
* EducationRubricOutcome class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationRubricOutcome extends EducationOutcome
{

     /** 
     * Gets the publishedRubricQualityFeedback
     *
     * @return array The publishedRubricQualityFeedback
     */
    public function getPublishedRubricQualityFeedback()
    {
        if (array_key_exists("publishedRubricQualityFeedback", $this->_propDict)) {
           return $this->_propDict["publishedRubricQualityFeedback"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the publishedRubricQualityFeedback
    *
    * @param RubricQualityFeedbackModel $val The publishedRubricQualityFeedback
    *
    * @return EducationRubricOutcome
    */
    public function setPublishedRubricQualityFeedback($val)
    {
		$this->_propDict["publishedRubricQualityFeedback"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publishedRubricQualitySelectedLevels
     *
     * @return array The publishedRubricQualitySelectedLevels
     */
    public function getPublishedRubricQualitySelectedLevels()
    {
        if (array_key_exists("publishedRubricQualitySelectedLevels", $this->_propDict)) {
           return $this->_propDict["publishedRubricQualitySelectedLevels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the publishedRubricQualitySelectedLevels
    *
    * @param RubricQualitySelectedColumnModel $val The publishedRubricQualitySelectedLevels
    *
    * @return EducationRubricOutcome
    */
    public function setPublishedRubricQualitySelectedLevels($val)
    {
		$this->_propDict["publishedRubricQualitySelectedLevels"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rubricQualityFeedback
     *
     * @return array The rubricQualityFeedback
     */
    public function getRubricQualityFeedback()
    {
        if (array_key_exists("rubricQualityFeedback", $this->_propDict)) {
           return $this->_propDict["rubricQualityFeedback"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rubricQualityFeedback
    *
    * @param RubricQualityFeedbackModel $val The rubricQualityFeedback
    *
    * @return EducationRubricOutcome
    */
    public function setRubricQualityFeedback($val)
    {
		$this->_propDict["rubricQualityFeedback"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rubricQualitySelectedLevels
     *
     * @return array The rubricQualitySelectedLevels
     */
    public function getRubricQualitySelectedLevels()
    {
        if (array_key_exists("rubricQualitySelectedLevels", $this->_propDict)) {
           return $this->_propDict["rubricQualitySelectedLevels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rubricQualitySelectedLevels
    *
    * @param RubricQualitySelectedColumnModel $val The rubricQualitySelectedLevels
    *
    * @return EducationRubricOutcome
    */
    public function setRubricQualitySelectedLevels($val)
    {
		$this->_propDict["rubricQualitySelectedLevels"] = $val;
        return $this;
    }
    
}