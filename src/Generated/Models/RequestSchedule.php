<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestSchedule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ExpirationPattern|null $expiration In entitlement management, when the access should expire.
    */
    private ?ExpirationPattern $expiration = null;
    
    /**
     * @var PatternedRecurrence|null $recurrence For recurring access, or eligible or active assignment. This property is currently unsupported in both PIM and entitlement management.
    */
    private ?PatternedRecurrence $recurrence = null;
    
    /**
     * @var DateTime|null $startDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. In PIM, when the  eligible or active assignment becomes active.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new requestSchedule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestSchedule {
        return new RequestSchedule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expiration property value. In entitlement management, when the access should expire.
     * @return ExpirationPattern|null
    */
    public function getExpiration(): ?ExpirationPattern {
        return $this->expiration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiration' => function (ParseNode $n) use ($o) { $o->setExpiration($n->getObjectValue(array(ExpirationPattern::class, 'createFromDiscriminatorValue'))); },
            'recurrence' => function (ParseNode $n) use ($o) { $o->setRecurrence($n->getObjectValue(array(PatternedRecurrence::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the recurrence property value. For recurring access, or eligible or active assignment. This property is currently unsupported in both PIM and entitlement management.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the startDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. In PIM, when the  eligible or active assignment becomes active.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('expiration', $this->expiration);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
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
     * Sets the expiration property value. In entitlement management, when the access should expire.
     *  @param ExpirationPattern|null $value Value to set for the expiration property.
    */
    public function setExpiration(?ExpirationPattern $value ): void {
        $this->expiration = $value;
    }

    /**
     * Sets the recurrence property value. For recurring access, or eligible or active assignment. This property is currently unsupported in both PIM and entitlement management.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the startDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. In PIM, when the  eligible or active assignment becomes active.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
