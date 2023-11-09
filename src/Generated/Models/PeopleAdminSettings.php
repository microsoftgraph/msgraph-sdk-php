<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PeopleAdminSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new peopleAdminSettings and sets the default values.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('profileCardProperties', $this->getProfileCardProperties());
    }

    /**
     * Sets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     * @param array<ProfileCardProperty>|null $value Value to set for the profileCardProperties property.
    */
    public function setProfileCardProperties(?array $value): void {
        $this->getBackingStore()->set('profileCardProperties', $value);
    }

}
