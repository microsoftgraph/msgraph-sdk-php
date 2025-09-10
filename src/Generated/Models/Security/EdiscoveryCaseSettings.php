<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryCaseSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryCaseSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryCaseSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryCaseSettings {
        return new EdiscoveryCaseSettings();
    }

    /**
     * Gets the caseType property value. The caseType property
     * @return CaseType|null
    */
    public function getCaseType(): ?CaseType {
        $val = $this->getBackingStore()->get('caseType');
        if (is_null($val) || $val instanceof CaseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'caseType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'caseType' => fn(ParseNode $n) => $o->setCaseType($n->getEnumValue(CaseType::class)),
            'ocr' => fn(ParseNode $n) => $o->setOcr($n->getObjectValue([OcrSettings::class, 'createFromDiscriminatorValue'])),
            'redundancyDetection' => fn(ParseNode $n) => $o->setRedundancyDetection($n->getObjectValue([RedundancyDetectionSettings::class, 'createFromDiscriminatorValue'])),
            'reviewSetSettings' => fn(ParseNode $n) => $o->setReviewSetSettings($n->getEnumValue(ReviewSetSettings::class)),
            'topicModeling' => fn(ParseNode $n) => $o->setTopicModeling($n->getObjectValue([TopicModelingSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the ocr property value. The OCR (Optical Character Recognition) settings for the case.
     * @return OcrSettings|null
    */
    public function getOcr(): ?OcrSettings {
        $val = $this->getBackingStore()->get('ocr');
        if (is_null($val) || $val instanceof OcrSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ocr'");
    }

    /**
     * Gets the redundancyDetection property value. The redundancy (near duplicate and email threading) detection settings for the case.
     * @return RedundancyDetectionSettings|null
    */
    public function getRedundancyDetection(): ?RedundancyDetectionSettings {
        $val = $this->getBackingStore()->get('redundancyDetection');
        if (is_null($val) || $val instanceof RedundancyDetectionSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redundancyDetection'");
    }

    /**
     * Gets the reviewSetSettings property value. The settings of the review set for the case. Possible values are: none, disableGrouping, unknownFutureValue.
     * @return ReviewSetSettings|null
    */
    public function getReviewSetSettings(): ?ReviewSetSettings {
        $val = $this->getBackingStore()->get('reviewSetSettings');
        if (is_null($val) || $val instanceof ReviewSetSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewSetSettings'");
    }

    /**
     * Gets the topicModeling property value. The Topic Modeling (Themes) settings for the case.
     * @return TopicModelingSettings|null
    */
    public function getTopicModeling(): ?TopicModelingSettings {
        $val = $this->getBackingStore()->get('topicModeling');
        if (is_null($val) || $val instanceof TopicModelingSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topicModeling'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('caseType', $this->getCaseType());
        $writer->writeObjectValue('ocr', $this->getOcr());
        $writer->writeObjectValue('redundancyDetection', $this->getRedundancyDetection());
        $writer->writeEnumValue('reviewSetSettings', $this->getReviewSetSettings());
        $writer->writeObjectValue('topicModeling', $this->getTopicModeling());
    }

    /**
     * Sets the caseType property value. The caseType property
     * @param CaseType|null $value Value to set for the caseType property.
    */
    public function setCaseType(?CaseType $value): void {
        $this->getBackingStore()->set('caseType', $value);
    }

    /**
     * Sets the ocr property value. The OCR (Optical Character Recognition) settings for the case.
     * @param OcrSettings|null $value Value to set for the ocr property.
    */
    public function setOcr(?OcrSettings $value): void {
        $this->getBackingStore()->set('ocr', $value);
    }

    /**
     * Sets the redundancyDetection property value. The redundancy (near duplicate and email threading) detection settings for the case.
     * @param RedundancyDetectionSettings|null $value Value to set for the redundancyDetection property.
    */
    public function setRedundancyDetection(?RedundancyDetectionSettings $value): void {
        $this->getBackingStore()->set('redundancyDetection', $value);
    }

    /**
     * Sets the reviewSetSettings property value. The settings of the review set for the case. Possible values are: none, disableGrouping, unknownFutureValue.
     * @param ReviewSetSettings|null $value Value to set for the reviewSetSettings property.
    */
    public function setReviewSetSettings(?ReviewSetSettings $value): void {
        $this->getBackingStore()->set('reviewSetSettings', $value);
    }

    /**
     * Sets the topicModeling property value. The Topic Modeling (Themes) settings for the case.
     * @param TopicModelingSettings|null $value Value to set for the topicModeling property.
    */
    public function setTopicModeling(?TopicModelingSettings $value): void {
        $this->getBackingStore()->set('topicModeling', $value);
    }

}
