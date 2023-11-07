<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProfileCardProperty extends Entity implements Parsable 
{
    /**
     * Instantiates a new profileCardProperty and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProfileCardProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProfileCardProperty {
        return new ProfileCardProperty();
    }

    /**
     * Gets the annotations property value. Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
     * @return array<ProfileCardAnnotation>|null
    */
    public function getAnnotations(): ?array {
        $val = $this->getBackingStore()->get('annotations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProfileCardAnnotation::class);
            /** @var array<ProfileCardAnnotation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'annotations'");
    }

    /**
     * Gets the directoryPropertyName property value. Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Microsoft Entra ID properties on the Microsoft 365 profile card within their tenant. When present, the Microsoft Entra ID field referenced in this property is visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
     * @return string|null
    */
    public function getDirectoryPropertyName(): ?string {
        $val = $this->getBackingStore()->get('directoryPropertyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryPropertyName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'annotations' => fn(ParseNode $n) => $o->setAnnotations($n->getCollectionOfObjectValues([ProfileCardAnnotation::class, 'createFromDiscriminatorValue'])),
            'directoryPropertyName' => fn(ParseNode $n) => $o->setDirectoryPropertyName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('annotations', $this->getAnnotations());
        $writer->writeStringValue('directoryPropertyName', $this->getDirectoryPropertyName());
    }

    /**
     * Sets the annotations property value. Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
     * @param array<ProfileCardAnnotation>|null $value Value to set for the annotations property.
    */
    public function setAnnotations(?array $value): void {
        $this->getBackingStore()->set('annotations', $value);
    }

    /**
     * Sets the directoryPropertyName property value. Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Microsoft Entra ID properties on the Microsoft 365 profile card within their tenant. When present, the Microsoft Entra ID field referenced in this property is visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
     * @param string|null $value Value to set for the directoryPropertyName property.
    */
    public function setDirectoryPropertyName(?string $value): void {
        $this->getBackingStore()->set('directoryPropertyName', $value);
    }

}
