<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityUserFlowAttributeAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityUserFlowAttributeAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityUserFlowAttributeAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityUserFlowAttributeAssignment {
        return new IdentityUserFlowAttributeAssignment();
    }

    /**
     * Gets the displayName property value. The display name of the identityUserFlowAttribute within a user flow.
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
            'isOptional' => fn(ParseNode $n) => $o->setIsOptional($n->getBooleanValue()),
            'requiresVerification' => fn(ParseNode $n) => $o->setRequiresVerification($n->getBooleanValue()),
            'userAttribute' => fn(ParseNode $n) => $o->setUserAttribute($n->getObjectValue([IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'])),
            'userAttributeValues' => fn(ParseNode $n) => $o->setUserAttributeValues($n->getCollectionOfObjectValues([UserAttributeValuesItem::class, 'createFromDiscriminatorValue'])),
            'userInputType' => fn(ParseNode $n) => $o->setUserInputType($n->getEnumValue(IdentityUserFlowAttributeInputType::class)),
        ]);
    }

    /**
     * Gets the isOptional property value. Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user can't complete sign-up without providing a value.
     * @return bool|null
    */
    public function getIsOptional(): ?bool {
        $val = $this->getBackingStore()->get('isOptional');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOptional'");
    }

    /**
     * Gets the requiresVerification property value. Determines whether the identityUserFlowAttribute requires verification, and is only used for verifying the user's phone number or email address.
     * @return bool|null
    */
    public function getRequiresVerification(): ?bool {
        $val = $this->getBackingStore()->get('requiresVerification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiresVerification'");
    }

    /**
     * Gets the userAttribute property value. The user attribute that you want to add to your user flow.
     * @return IdentityUserFlowAttribute|null
    */
    public function getUserAttribute(): ?IdentityUserFlowAttribute {
        $val = $this->getBackingStore()->get('userAttribute');
        if (is_null($val) || $val instanceof IdentityUserFlowAttribute) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAttribute'");
    }

    /**
     * Gets the userAttributeValues property value. The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     * @return array<UserAttributeValuesItem>|null
    */
    public function getUserAttributeValues(): ?array {
        $val = $this->getBackingStore()->get('userAttributeValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserAttributeValuesItem::class);
            /** @var array<UserAttributeValuesItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAttributeValues'");
    }

    /**
     * Gets the userInputType property value. The userInputType property
     * @return IdentityUserFlowAttributeInputType|null
    */
    public function getUserInputType(): ?IdentityUserFlowAttributeInputType {
        $val = $this->getBackingStore()->get('userInputType');
        if (is_null($val) || $val instanceof IdentityUserFlowAttributeInputType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userInputType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isOptional', $this->getIsOptional());
        $writer->writeBooleanValue('requiresVerification', $this->getRequiresVerification());
        $writer->writeObjectValue('userAttribute', $this->getUserAttribute());
        $writer->writeCollectionOfObjectValues('userAttributeValues', $this->getUserAttributeValues());
        $writer->writeEnumValue('userInputType', $this->getUserInputType());
    }

    /**
     * Sets the displayName property value. The display name of the identityUserFlowAttribute within a user flow.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isOptional property value. Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user can't complete sign-up without providing a value.
     * @param bool|null $value Value to set for the isOptional property.
    */
    public function setIsOptional(?bool $value): void {
        $this->getBackingStore()->set('isOptional', $value);
    }

    /**
     * Sets the requiresVerification property value. Determines whether the identityUserFlowAttribute requires verification, and is only used for verifying the user's phone number or email address.
     * @param bool|null $value Value to set for the requiresVerification property.
    */
    public function setRequiresVerification(?bool $value): void {
        $this->getBackingStore()->set('requiresVerification', $value);
    }

    /**
     * Sets the userAttribute property value. The user attribute that you want to add to your user flow.
     * @param IdentityUserFlowAttribute|null $value Value to set for the userAttribute property.
    */
    public function setUserAttribute(?IdentityUserFlowAttribute $value): void {
        $this->getBackingStore()->set('userAttribute', $value);
    }

    /**
     * Sets the userAttributeValues property value. The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     * @param array<UserAttributeValuesItem>|null $value Value to set for the userAttributeValues property.
    */
    public function setUserAttributeValues(?array $value): void {
        $this->getBackingStore()->set('userAttributeValues', $value);
    }

    /**
     * Sets the userInputType property value. The userInputType property
     * @param IdentityUserFlowAttributeInputType|null $value Value to set for the userInputType property.
    */
    public function setUserInputType(?IdentityUserFlowAttributeInputType $value): void {
        $this->getBackingStore()->set('userInputType', $value);
    }

}
