<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserFlowLanguageConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new userFlowLanguageConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserFlowLanguageConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserFlowLanguageConfiguration {
        return new UserFlowLanguageConfiguration();
    }

    /**
     * Gets the defaultPages property value. Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
     * @return array<UserFlowLanguagePage>|null
    */
    public function getDefaultPages(): ?array {
        $val = $this->getBackingStore()->get('defaultPages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserFlowLanguagePage::class);
            /** @var array<UserFlowLanguagePage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultPages'");
    }

    /**
     * Gets the displayName property value. The language name to display. This property is read-only.
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
            'defaultPages' => fn(ParseNode $n) => $o->setDefaultPages($n->getCollectionOfObjectValues([UserFlowLanguagePage::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'overridesPages' => fn(ParseNode $n) => $o->setOverridesPages($n->getCollectionOfObjectValues([UserFlowLanguagePage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the language is enabled within the user flow.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the overridesPages property value. Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows you to modify the content of the page, any other modification isn't allowed (creation or deletion of pages).
     * @return array<UserFlowLanguagePage>|null
    */
    public function getOverridesPages(): ?array {
        $val = $this->getBackingStore()->get('overridesPages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserFlowLanguagePage::class);
            /** @var array<UserFlowLanguagePage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overridesPages'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('defaultPages', $this->getDefaultPages());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeCollectionOfObjectValues('overridesPages', $this->getOverridesPages());
    }

    /**
     * Sets the defaultPages property value. Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
     * @param array<UserFlowLanguagePage>|null $value Value to set for the defaultPages property.
    */
    public function setDefaultPages(?array $value): void {
        $this->getBackingStore()->set('defaultPages', $value);
    }

    /**
     * Sets the displayName property value. The language name to display. This property is read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the language is enabled within the user flow.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the overridesPages property value. Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows you to modify the content of the page, any other modification isn't allowed (creation or deletion of pages).
     * @param array<UserFlowLanguagePage>|null $value Value to set for the overridesPages property.
    */
    public function setOverridesPages(?array $value): void {
        $this->getBackingStore()->set('overridesPages', $value);
    }

}
