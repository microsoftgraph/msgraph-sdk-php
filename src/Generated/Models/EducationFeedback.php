<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationFeedback implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IdentitySet|null $feedbackBy User who created the feedback.
    */
    private ?IdentitySet $feedbackBy = null;
    
    /**
     * @var DateTime|null $feedbackDateTime Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $feedbackDateTime = null;
    
    /**
     * @var EducationItemBody|null $text Feedback.
    */
    private ?EducationItemBody $text = null;
    
    /**
     * Instantiates a new educationFeedback and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationFeedback
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationFeedback {
        return new EducationFeedback();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the feedbackBy property value. User who created the feedback.
     * @return IdentitySet|null
    */
    public function getFeedbackBy(): ?IdentitySet {
        return $this->feedbackBy;
    }

    /**
     * Gets the feedbackDateTime property value. Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getFeedbackDateTime(): ?DateTime {
        return $this->feedbackDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feedbackBy' => function (ParseNode $n) use ($o) { $o->setFeedbackBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'feedbackDateTime' => function (ParseNode $n) use ($o) { $o->setFeedbackDateTime($n->getDateTimeValue()); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getObjectValue(array(EducationItemBody::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the text property value. Feedback.
     * @return EducationItemBody|null
    */
    public function getText(): ?EducationItemBody {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('feedbackBy', $this->feedbackBy);
        $writer->writeDateTimeValue('feedbackDateTime', $this->feedbackDateTime);
        $writer->writeObjectValue('text', $this->text);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the feedbackBy property value. User who created the feedback.
     *  @param IdentitySet|null $value Value to set for the feedbackBy property.
    */
    public function setFeedbackBy(?IdentitySet $value ): void {
        $this->feedbackBy = $value;
    }

    /**
     * Sets the feedbackDateTime property value. Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the feedbackDateTime property.
    */
    public function setFeedbackDateTime(?DateTime $value ): void {
        $this->feedbackDateTime = $value;
    }

    /**
     * Sets the text property value. Feedback.
     *  @param EducationItemBody|null $value Value to set for the text property.
    */
    public function setText(?EducationItemBody $value ): void {
        $this->text = $value;
    }

}
