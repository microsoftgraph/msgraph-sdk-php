<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatAssessmentResult extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $message The result message for each threat assessment.
    */
    private ?string $message = null;
    
    /**
     * @var ThreatAssessmentResultType|null $resultType The threat assessment result type. Possible values are: checkPolicy (only for mail assessment), rescan.
    */
    private ?ThreatAssessmentResultType $resultType = null;
    
    /**
     * Instantiates a new threatAssessmentResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatAssessmentResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatAssessmentResult {
        return new ThreatAssessmentResult();
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'resultType' => function (ParseNode $n) use ($o) { $o->setResultType($n->getEnumValue(ThreatAssessmentResultType::class)); },
        ]);
    }

    /**
     * Gets the message property value. The result message for each threat assessment.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the resultType property value. The threat assessment result type. Possible values are: checkPolicy (only for mail assessment), rescan.
     * @return ThreatAssessmentResultType|null
    */
    public function getResultType(): ?ThreatAssessmentResultType {
        return $this->resultType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('message', $this->message);
        $writer->writeEnumValue('resultType', $this->resultType);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the message property value. The result message for each threat assessment.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the resultType property value. The threat assessment result type. Possible values are: checkPolicy (only for mail assessment), rescan.
     *  @param ThreatAssessmentResultType|null $value Value to set for the resultType property.
    */
    public function setResultType(?ThreatAssessmentResultType $value ): void {
        $this->resultType = $value;
    }

}
