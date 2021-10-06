<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationRubricOutcome File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* EducationRubricOutcome class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationRubricOutcome extends EducationOutcome
{

     /** 
     * Gets the publishedRubricQualityFeedback
    * A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     *
     * @return RubricQualityFeedbackModel[]|null The publishedRubricQualityFeedback
     */
    public function getPublishedRubricQualityFeedback()
    {
        if (array_key_exists('publishedRubricQualityFeedback', $this->_propDict) && !is_null($this->_propDict['publishedRubricQualityFeedback'])) {
            $publishedRubricQualityFeedback = [];
            if (count($this->_propDict['publishedRubricQualityFeedback']) > 0 && is_a($this->_propDict['publishedRubricQualityFeedback'][0], 'RubricQualityFeedbackModel')) {
                return $this->_propDict['publishedRubricQualityFeedback'];
            }
            foreach ($this->_propDict['publishedRubricQualityFeedback'] as $singleValue) {
                $publishedRubricQualityFeedback []= new RubricQualityFeedbackModel($singleValue);
            }
            $this->_propDict['publishedRubricQualityFeedback'] = $publishedRubricQualityFeedback;
            return $this->_propDict['publishedRubricQualityFeedback'];
        }
        return null;
    }
    
    /** 
    * Sets the publishedRubricQualityFeedback
    * A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
    *
    * @param RubricQualityFeedbackModel[] $val The publishedRubricQualityFeedback
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
    * A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     *
     * @return RubricQualitySelectedColumnModel[]|null The publishedRubricQualitySelectedLevels
     */
    public function getPublishedRubricQualitySelectedLevels()
    {
        if (array_key_exists('publishedRubricQualitySelectedLevels', $this->_propDict) && !is_null($this->_propDict['publishedRubricQualitySelectedLevels'])) {
            $publishedRubricQualitySelectedLevels = [];
            if (count($this->_propDict['publishedRubricQualitySelectedLevels']) > 0 && is_a($this->_propDict['publishedRubricQualitySelectedLevels'][0], 'RubricQualitySelectedColumnModel')) {
                return $this->_propDict['publishedRubricQualitySelectedLevels'];
            }
            foreach ($this->_propDict['publishedRubricQualitySelectedLevels'] as $singleValue) {
                $publishedRubricQualitySelectedLevels []= new RubricQualitySelectedColumnModel($singleValue);
            }
            $this->_propDict['publishedRubricQualitySelectedLevels'] = $publishedRubricQualitySelectedLevels;
            return $this->_propDict['publishedRubricQualitySelectedLevels'];
        }
        return null;
    }
    
    /** 
    * Sets the publishedRubricQualitySelectedLevels
    * A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
    *
    * @param RubricQualitySelectedColumnModel[] $val The publishedRubricQualitySelectedLevels
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
    * A collection of specific feedback for each quality of this rubric.
     *
     * @return RubricQualityFeedbackModel[]|null The rubricQualityFeedback
     */
    public function getRubricQualityFeedback()
    {
        if (array_key_exists('rubricQualityFeedback', $this->_propDict) && !is_null($this->_propDict['rubricQualityFeedback'])) {
            $rubricQualityFeedback = [];
            if (count($this->_propDict['rubricQualityFeedback']) > 0 && is_a($this->_propDict['rubricQualityFeedback'][0], 'RubricQualityFeedbackModel')) {
                return $this->_propDict['rubricQualityFeedback'];
            }
            foreach ($this->_propDict['rubricQualityFeedback'] as $singleValue) {
                $rubricQualityFeedback []= new RubricQualityFeedbackModel($singleValue);
            }
            $this->_propDict['rubricQualityFeedback'] = $rubricQualityFeedback;
            return $this->_propDict['rubricQualityFeedback'];
        }
        return null;
    }
    
    /** 
    * Sets the rubricQualityFeedback
    * A collection of specific feedback for each quality of this rubric.
    *
    * @param RubricQualityFeedbackModel[] $val The rubricQualityFeedback
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
    * The level that the teacher has selected for each quality while grading this assignment.
     *
     * @return RubricQualitySelectedColumnModel[]|null The rubricQualitySelectedLevels
     */
    public function getRubricQualitySelectedLevels()
    {
        if (array_key_exists('rubricQualitySelectedLevels', $this->_propDict) && !is_null($this->_propDict['rubricQualitySelectedLevels'])) {
            $rubricQualitySelectedLevels = [];
            if (count($this->_propDict['rubricQualitySelectedLevels']) > 0 && is_a($this->_propDict['rubricQualitySelectedLevels'][0], 'RubricQualitySelectedColumnModel')) {
                return $this->_propDict['rubricQualitySelectedLevels'];
            }
            foreach ($this->_propDict['rubricQualitySelectedLevels'] as $singleValue) {
                $rubricQualitySelectedLevels []= new RubricQualitySelectedColumnModel($singleValue);
            }
            $this->_propDict['rubricQualitySelectedLevels'] = $rubricQualitySelectedLevels;
            return $this->_propDict['rubricQualitySelectedLevels'];
        }
        return null;
    }
    
    /** 
    * Sets the rubricQualitySelectedLevels
    * The level that the teacher has selected for each quality while grading this assignment.
    *
    * @param RubricQualitySelectedColumnModel[] $val The rubricQualitySelectedLevels
    *
    * @return EducationRubricOutcome
    */
    public function setRubricQualitySelectedLevels($val)
    {
        $this->_propDict["rubricQualitySelectedLevels"] = $val;
        return $this;
    }
    
}
