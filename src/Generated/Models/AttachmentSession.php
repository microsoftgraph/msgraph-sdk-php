<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class AttachmentSession extends Entity implements Parsable 
{
    /**
     * Instantiates a new AttachmentSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentSession {
        return new AttachmentSession();
    }

    /**
     * Gets the content property value. The content streams that are uploaded.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'nextExpectedRanges' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNextExpectedRanges($val);
            },
        ]);
    }

    /**
     * Gets the nextExpectedRanges property value. Indicates a single value {start} that represents the location in the file where the next upload should begin.
     * @return array<string>|null
    */
    public function getNextExpectedRanges(): ?array {
        $val = $this->getBackingStore()->get('nextExpectedRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextExpectedRanges'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeCollectionOfPrimitiveValues('nextExpectedRanges', $this->getNextExpectedRanges());
    }

    /**
     * Sets the content property value. The content streams that are uploaded.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the nextExpectedRanges property value. Indicates a single value {start} that represents the location in the file where the next upload should begin.
     * @param array<string>|null $value Value to set for the nextExpectedRanges property.
    */
    public function setNextExpectedRanges(?array $value): void {
        $this->getBackingStore()->set('nextExpectedRanges', $value);
    }

}
