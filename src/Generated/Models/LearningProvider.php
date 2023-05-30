<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningProvider extends Entity implements Parsable 
{
    /**
     * Instantiates a new learningProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningProvider {
        return new LearningProvider();
    }

    /**
     * Gets the displayName property value. The display name that appears in Viva Learning. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'learningContents' => fn(ParseNode $n) => $o->setLearningContents($n->getCollectionOfObjectValues([LearningContent::class, 'createFromDiscriminatorValue'])),
            'loginWebUrl' => fn(ParseNode $n) => $o->setLoginWebUrl($n->getStringValue()),
            'longLogoWebUrlForDarkTheme' => fn(ParseNode $n) => $o->setLongLogoWebUrlForDarkTheme($n->getStringValue()),
            'longLogoWebUrlForLightTheme' => fn(ParseNode $n) => $o->setLongLogoWebUrlForLightTheme($n->getStringValue()),
            'squareLogoWebUrlForDarkTheme' => fn(ParseNode $n) => $o->setSquareLogoWebUrlForDarkTheme($n->getStringValue()),
            'squareLogoWebUrlForLightTheme' => fn(ParseNode $n) => $o->setSquareLogoWebUrlForLightTheme($n->getStringValue()),
        ]);
    }

    /**
     * Gets the learningContents property value. Learning catalog items for the provider.
     * @return array<LearningContent>|null
    */
    public function getLearningContents(): ?array {
        return $this->getBackingStore()->get('learningContents');
    }

    /**
     * Gets the loginWebUrl property value. Authentication URL to access the courses for the provider. Optional.
     * @return string|null
    */
    public function getLoginWebUrl(): ?string {
        return $this->getBackingStore()->get('loginWebUrl');
    }

    /**
     * Gets the longLogoWebUrlForDarkTheme property value. The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getLongLogoWebUrlForDarkTheme(): ?string {
        return $this->getBackingStore()->get('longLogoWebUrlForDarkTheme');
    }

    /**
     * Gets the longLogoWebUrlForLightTheme property value. The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getLongLogoWebUrlForLightTheme(): ?string {
        return $this->getBackingStore()->get('longLogoWebUrlForLightTheme');
    }

    /**
     * Gets the squareLogoWebUrlForDarkTheme property value. The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getSquareLogoWebUrlForDarkTheme(): ?string {
        return $this->getBackingStore()->get('squareLogoWebUrlForDarkTheme');
    }

    /**
     * Gets the squareLogoWebUrlForLightTheme property value. The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getSquareLogoWebUrlForLightTheme(): ?string {
        return $this->getBackingStore()->get('squareLogoWebUrlForLightTheme');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('learningContents', $this->getLearningContents());
        $writer->writeStringValue('loginWebUrl', $this->getLoginWebUrl());
        $writer->writeStringValue('longLogoWebUrlForDarkTheme', $this->getLongLogoWebUrlForDarkTheme());
        $writer->writeStringValue('longLogoWebUrlForLightTheme', $this->getLongLogoWebUrlForLightTheme());
        $writer->writeStringValue('squareLogoWebUrlForDarkTheme', $this->getSquareLogoWebUrlForDarkTheme());
        $writer->writeStringValue('squareLogoWebUrlForLightTheme', $this->getSquareLogoWebUrlForLightTheme());
    }

    /**
     * Sets the displayName property value. The display name that appears in Viva Learning. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the learningContents property value. Learning catalog items for the provider.
     * @param array<LearningContent>|null $value Value to set for the learningContents property.
    */
    public function setLearningContents(?array $value): void {
        $this->getBackingStore()->set('learningContents', $value);
    }

    /**
     * Sets the loginWebUrl property value. Authentication URL to access the courses for the provider. Optional.
     * @param string|null $value Value to set for the loginWebUrl property.
    */
    public function setLoginWebUrl(?string $value): void {
        $this->getBackingStore()->set('loginWebUrl', $value);
    }

    /**
     * Sets the longLogoWebUrlForDarkTheme property value. The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @param string|null $value Value to set for the longLogoWebUrlForDarkTheme property.
    */
    public function setLongLogoWebUrlForDarkTheme(?string $value): void {
        $this->getBackingStore()->set('longLogoWebUrlForDarkTheme', $value);
    }

    /**
     * Sets the longLogoWebUrlForLightTheme property value. The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @param string|null $value Value to set for the longLogoWebUrlForLightTheme property.
    */
    public function setLongLogoWebUrlForLightTheme(?string $value): void {
        $this->getBackingStore()->set('longLogoWebUrlForLightTheme', $value);
    }

    /**
     * Sets the squareLogoWebUrlForDarkTheme property value. The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @param string|null $value Value to set for the squareLogoWebUrlForDarkTheme property.
    */
    public function setSquareLogoWebUrlForDarkTheme(?string $value): void {
        $this->getBackingStore()->set('squareLogoWebUrlForDarkTheme', $value);
    }

    /**
     * Sets the squareLogoWebUrlForLightTheme property value. The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @param string|null $value Value to set for the squareLogoWebUrlForLightTheme property.
    */
    public function setSquareLogoWebUrlForLightTheme(?string $value): void {
        $this->getBackingStore()->set('squareLogoWebUrlForLightTheme', $value);
    }

}
