<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryCaseMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryCaseMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryCaseMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryCaseMember {
        return new EdiscoveryCaseMember();
    }

    /**
     * Gets the displayName property value. The display name of the eDiscovery case member. Allowed only for case members of type roleGroup.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'recipientType' => fn(ParseNode $n) => $o->setRecipientType($n->getEnumValue(RecipientType::class)),
            'smtpAddress' => fn(ParseNode $n) => $o->setSmtpAddress($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recipientType property value. Specifies the recipient type of the eDiscovery case member. The possible values are: user, roleGroup, unknownFutureValue.
     * @return RecipientType|null
    */
    public function getRecipientType(): ?RecipientType {
        $val = $this->getBackingStore()->get('recipientType');
        if (is_null($val) || $val instanceof RecipientType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientType'");
    }

    /**
     * Gets the smtpAddress property value. The smtp address of the eDiscovery case member. Allowed only for case members of type user.
     * @return string|null
    */
    public function getSmtpAddress(): ?string {
        $val = $this->getBackingStore()->get('smtpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smtpAddress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('recipientType', $this->getRecipientType());
        $writer->writeStringValue('smtpAddress', $this->getSmtpAddress());
    }

    /**
     * Sets the displayName property value. The display name of the eDiscovery case member. Allowed only for case members of type roleGroup.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the recipientType property value. Specifies the recipient type of the eDiscovery case member. The possible values are: user, roleGroup, unknownFutureValue.
     * @param RecipientType|null $value Value to set for the recipientType property.
    */
    public function setRecipientType(?RecipientType $value): void {
        $this->getBackingStore()->set('recipientType', $value);
    }

    /**
     * Sets the smtpAddress property value. The smtp address of the eDiscovery case member. Allowed only for case members of type user.
     * @param string|null $value Value to set for the smtpAddress property.
    */
    public function setSmtpAddress(?string $value): void {
        $this->getBackingStore()->set('smtpAddress', $value);
    }

}
