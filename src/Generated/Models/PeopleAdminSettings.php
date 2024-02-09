<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PeopleAdminSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new PeopleAdminSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PeopleAdminSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PeopleAdminSettings {
        return new PeopleAdminSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'profileCardProperties' => fn(ParseNode $n) => $o->setProfileCardProperties($n->getCollectionOfObjectValues([ProfileCardProperty::class, 'createFromDiscriminatorValue'])),
            'pronouns' => fn(ParseNode $n) => $o->setPronouns($n->getObjectValue([PronounsSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     * @return array<ProfileCardProperty>|null
    */
    public function getProfileCardProperties(): ?array {
        $val = $this->getBackingStore()->get('profileCardProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProfileCardProperty::class);
            /** @var array<ProfileCardProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileCardProperties'");
    }

    /**
     * Gets the pronouns property value. Represents administrator settings that manage the support of pronouns in an organization.
     * @return PronounsSettings|null
    */
    public function getPronouns(): ?PronounsSettings {
        $val = $this->getBackingStore()->get('pronouns');
        if (is_null($val) || $val instanceof PronounsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pronouns'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('profileCardProperties', $this->getProfileCardProperties());
        $writer->writeObjectValue('pronouns', $this->getPronouns());
    }

    /**
     * Sets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     * @param array<ProfileCardProperty>|null $value Value to set for the profileCardProperties property.
    */
    public function setProfileCardProperties(?array $value): void {
        $this->getBackingStore()->set('profileCardProperties', $value);
    }

    /**
     * Sets the pronouns property value. Represents administrator settings that manage the support of pronouns in an organization.
     * @param PronounsSettings|null $value Value to set for the pronouns property.
    */
    public function setPronouns(?PronounsSettings $value): void {
        $this->getBackingStore()->set('pronouns', $value);
    }

}
