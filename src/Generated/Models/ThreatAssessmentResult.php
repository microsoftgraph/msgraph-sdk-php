<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatAssessmentResult extends Entity implements Parsable 
{
    /**
     * Instantiates a new ThreatAssessmentResult and sets the default values.
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
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'resultType' => fn(ParseNode $n) => $o->setResultType($n->getEnumValue(ThreatAssessmentResultType::class)),
        ]);
    }

    /**
     * Gets the message property value. The result message for each threat assessment.
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
    }

    /**
     * Gets the resultType property value. The threat assessment result type. The possible values are: checkPolicy, rescan.
     * @return ThreatAssessmentResultType|null
    */
    public function getResultType(): ?ThreatAssessmentResultType {
        $val = $this->getBackingStore()->get('resultType');
        if (is_null($val) || $val instanceof ThreatAssessmentResultType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resultType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeEnumValue('resultType', $this->getResultType());
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the message property value. The result message for each threat assessment.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the resultType property value. The threat assessment result type. The possible values are: checkPolicy, rescan.
     * @param ThreatAssessmentResultType|null $value Value to set for the resultType property.
    */
    public function setResultType(?ThreatAssessmentResultType $value): void {
        $this->getBackingStore()->set('resultType', $value);
    }

}
