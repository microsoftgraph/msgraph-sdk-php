<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Desk extends Place implements Parsable 
{
    /**
     * Instantiates a new Desk and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.desk');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Desk
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Desk {
        return new Desk();
    }

    /**
     * Gets the displayDeviceName property value. The displayDeviceName property
     * @return string|null
    */
    public function getDisplayDeviceName(): ?string {
        $val = $this->getBackingStore()->get('displayDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayDeviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayDeviceName' => fn(ParseNode $n) => $o->setDisplayDeviceName($n->getStringValue()),
            'mailboxDetails' => fn(ParseNode $n) => $o->setMailboxDetails($n->getObjectValue([MailboxDetails::class, 'createFromDiscriminatorValue'])),
            'mode' => fn(ParseNode $n) => $o->setMode($n->getObjectValue([PlaceMode::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mailboxDetails property value. The mailboxDetails property
     * @return MailboxDetails|null
    */
    public function getMailboxDetails(): ?MailboxDetails {
        $val = $this->getBackingStore()->get('mailboxDetails');
        if (is_null($val) || $val instanceof MailboxDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxDetails'");
    }

    /**
     * Gets the mode property value. The mode property
     * @return PlaceMode|null
    */
    public function getMode(): ?PlaceMode {
        $val = $this->getBackingStore()->get('mode');
        if (is_null($val) || $val instanceof PlaceMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayDeviceName', $this->getDisplayDeviceName());
        $writer->writeObjectValue('mailboxDetails', $this->getMailboxDetails());
        $writer->writeObjectValue('mode', $this->getMode());
    }

    /**
     * Sets the displayDeviceName property value. The displayDeviceName property
     * @param string|null $value Value to set for the displayDeviceName property.
    */
    public function setDisplayDeviceName(?string $value): void {
        $this->getBackingStore()->set('displayDeviceName', $value);
    }

    /**
     * Sets the mailboxDetails property value. The mailboxDetails property
     * @param MailboxDetails|null $value Value to set for the mailboxDetails property.
    */
    public function setMailboxDetails(?MailboxDetails $value): void {
        $this->getBackingStore()->set('mailboxDetails', $value);
    }

    /**
     * Sets the mode property value. The mode property
     * @param PlaceMode|null $value Value to set for the mode property.
    */
    public function setMode(?PlaceMode $value): void {
        $this->getBackingStore()->set('mode', $value);
    }

}
