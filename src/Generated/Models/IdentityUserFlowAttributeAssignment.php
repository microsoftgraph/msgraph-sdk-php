<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityUserFlowAttributeAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The display name of the identityUserFlowAttribute within a user flow.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isOptional Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user cannot complete sign-up without providing a value.
    */
    private ?bool $isOptional = null;
    
    /**
     * @var bool|null $requiresVerification Determines whether the identityUserFlowAttribute requires verification. This is only used for verifying the user's phone number or email address.
    */
    private ?bool $requiresVerification = null;
    
    /**
     * @var IdentityUserFlowAttribute|null $userAttribute The user attribute that you want to add to your user flow.
    */
    private ?IdentityUserFlowAttribute $userAttribute = null;
    
    /**
     * @var array<UserAttributeValuesItem>|null $userAttributeValues The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
    */
    private ?array $userAttributeValues = null;
    
    /**
     * @var IdentityUserFlowAttributeInputType|null $userInputType The input type of the user flow attribute. Possible values are: textBox, dateTimeDropdown, radioSingleSelect, dropdownSingleSelect, emailBox, checkboxMultiSelect.
    */
    private ?IdentityUserFlowAttributeInputType $userInputType = null;
    
    /**
     * Instantiates a new identityUserFlowAttributeAssignment and sets the default values.
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
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isOptional' => function (ParseNode $n) use ($o) { $o->setIsOptional($n->getBooleanValue()); },
            'requiresVerification' => function (ParseNode $n) use ($o) { $o->setRequiresVerification($n->getBooleanValue()); },
            'userAttribute' => function (ParseNode $n) use ($o) { $o->setUserAttribute($n->getObjectValue(array(IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'))); },
            'userAttributeValues' => function (ParseNode $n) use ($o) { $o->setUserAttributeValues($n->getCollectionOfObjectValues(array(UserAttributeValuesItem::class, 'createFromDiscriminatorValue'))); },
            'userInputType' => function (ParseNode $n) use ($o) { $o->setUserInputType($n->getEnumValue(IdentityUserFlowAttributeInputType::class)); },
        ]);
    }

    /**
     * Gets the isOptional property value. Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user cannot complete sign-up without providing a value.
     * @return bool|null
    */
    public function getIsOptional(): ?bool {
        return $this->isOptional;
    }

    /**
     * Gets the requiresVerification property value. Determines whether the identityUserFlowAttribute requires verification. This is only used for verifying the user's phone number or email address.
     * @return bool|null
    */
    public function getRequiresVerification(): ?bool {
        return $this->requiresVerification;
    }

    /**
     * Gets the userAttribute property value. The user attribute that you want to add to your user flow.
     * @return IdentityUserFlowAttribute|null
    */
    public function getUserAttribute(): ?IdentityUserFlowAttribute {
        return $this->userAttribute;
    }

    /**
     * Gets the userAttributeValues property value. The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     * @return array<UserAttributeValuesItem>|null
    */
    public function getUserAttributeValues(): ?array {
        return $this->userAttributeValues;
    }

    /**
     * Gets the userInputType property value. The input type of the user flow attribute. Possible values are: textBox, dateTimeDropdown, radioSingleSelect, dropdownSingleSelect, emailBox, checkboxMultiSelect.
     * @return IdentityUserFlowAttributeInputType|null
    */
    public function getUserInputType(): ?IdentityUserFlowAttributeInputType {
        return $this->userInputType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isOptional', $this->isOptional);
        $writer->writeBooleanValue('requiresVerification', $this->requiresVerification);
        $writer->writeObjectValue('userAttribute', $this->userAttribute);
        $writer->writeCollectionOfObjectValues('userAttributeValues', $this->userAttributeValues);
        $writer->writeEnumValue('userInputType', $this->userInputType);
    }

    /**
     * Sets the displayName property value. The display name of the identityUserFlowAttribute within a user flow.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isOptional property value. Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user cannot complete sign-up without providing a value.
     *  @param bool|null $value Value to set for the isOptional property.
    */
    public function setIsOptional(?bool $value ): void {
        $this->isOptional = $value;
    }

    /**
     * Sets the requiresVerification property value. Determines whether the identityUserFlowAttribute requires verification. This is only used for verifying the user's phone number or email address.
     *  @param bool|null $value Value to set for the requiresVerification property.
    */
    public function setRequiresVerification(?bool $value ): void {
        $this->requiresVerification = $value;
    }

    /**
     * Sets the userAttribute property value. The user attribute that you want to add to your user flow.
     *  @param IdentityUserFlowAttribute|null $value Value to set for the userAttribute property.
    */
    public function setUserAttribute(?IdentityUserFlowAttribute $value ): void {
        $this->userAttribute = $value;
    }

    /**
     * Sets the userAttributeValues property value. The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     *  @param array<UserAttributeValuesItem>|null $value Value to set for the userAttributeValues property.
    */
    public function setUserAttributeValues(?array $value ): void {
        $this->userAttributeValues = $value;
    }

    /**
     * Sets the userInputType property value. The input type of the user flow attribute. Possible values are: textBox, dateTimeDropdown, radioSingleSelect, dropdownSingleSelect, emailBox, checkboxMultiSelect.
     *  @param IdentityUserFlowAttributeInputType|null $value Value to set for the userInputType property.
    */
    public function setUserInputType(?IdentityUserFlowAttributeInputType $value ): void {
        $this->userInputType = $value;
    }

}
