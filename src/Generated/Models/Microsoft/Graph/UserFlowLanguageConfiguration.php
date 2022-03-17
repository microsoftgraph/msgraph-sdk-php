<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserFlowLanguageConfiguration extends Entity 
{
    /** @var array<UserFlowLanguagePage>|null $defaultPages Collection of pages with the default content to display in a user flow for a specified language. This collection does not allow any kind of modification. */
    private ?array $defaultPages = null;
    
    /** @var string|null $displayName The language name to display. This property is read-only. */
    private ?string $displayName = null;
    
    /** @var bool|null $isEnabled Indicates whether the language is enabled within the user flow. */
    private ?bool $isEnabled = null;
    
    /** @var array<UserFlowLanguagePage>|null $overridesPages Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows to modify the content of the page, any other modification is not allowed (creation or deletion of pages). */
    private ?array $overridesPages = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserFlowLanguageConfiguration {
        return new UserFlowLanguageConfiguration();
    }

    /**
     * Gets the defaultPages property value. Collection of pages with the default content to display in a user flow for a specified language. This collection does not allow any kind of modification.
     * @return array<UserFlowLanguagePage>|null
    */
    public function getDefaultPages(): ?array {
        return $this->defaultPages;
    }

    /**
     * Gets the displayName property value. The language name to display. This property is read-only.
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
        return array_merge(parent::getFieldDeserializers(), [
            'defaultPages' => function (self $o, ParseNode $n) { $o->setDefaultPages($n->getCollectionOfObjectValues(UserFlowLanguagePage::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'overridesPages' => function (self $o, ParseNode $n) { $o->setOverridesPages($n->getCollectionOfObjectValues(UserFlowLanguagePage::class)); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the language is enabled within the user flow.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the overridesPages property value. Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows to modify the content of the page, any other modification is not allowed (creation or deletion of pages).
     * @return array<UserFlowLanguagePage>|null
    */
    public function getOverridesPages(): ?array {
        return $this->overridesPages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('defaultPages', $this->defaultPages);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeCollectionOfObjectValues('overridesPages', $this->overridesPages);
    }

    /**
     * Sets the defaultPages property value. Collection of pages with the default content to display in a user flow for a specified language. This collection does not allow any kind of modification.
     *  @param array<UserFlowLanguagePage>|null $value Value to set for the defaultPages property.
    */
    public function setDefaultPages(?array $value ): void {
        $this->defaultPages = $value;
    }

    /**
     * Sets the displayName property value. The language name to display. This property is read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether the language is enabled within the user flow.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the overridesPages property value. Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows to modify the content of the page, any other modification is not allowed (creation or deletion of pages).
     *  @param array<UserFlowLanguagePage>|null $value Value to set for the overridesPages property.
    */
    public function setOverridesPages(?array $value ): void {
        $this->overridesPages = $value;
    }

}
