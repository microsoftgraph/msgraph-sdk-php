<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
            'isCourseActivitySyncEnabled' => fn(ParseNode $n) => $o->setIsCourseActivitySyncEnabled($n->getBooleanValue()),
            'learningContents' => fn(ParseNode $n) => $o->setLearningContents($n->getCollectionOfObjectValues([LearningContent::class, 'createFromDiscriminatorValue'])),
            'learningCourseActivities' => fn(ParseNode $n) => $o->setLearningCourseActivities($n->getCollectionOfObjectValues([LearningCourseActivity::class, 'createFromDiscriminatorValue'])),
            'loginWebUrl' => fn(ParseNode $n) => $o->setLoginWebUrl($n->getStringValue()),
            'longLogoWebUrlForDarkTheme' => fn(ParseNode $n) => $o->setLongLogoWebUrlForDarkTheme($n->getStringValue()),
            'longLogoWebUrlForLightTheme' => fn(ParseNode $n) => $o->setLongLogoWebUrlForLightTheme($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'squareLogoWebUrlForDarkTheme' => fn(ParseNode $n) => $o->setSquareLogoWebUrlForDarkTheme($n->getStringValue()),
            'squareLogoWebUrlForLightTheme' => fn(ParseNode $n) => $o->setSquareLogoWebUrlForLightTheme($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isCourseActivitySyncEnabled property value. Indicates whether a provider can ingest learning course activity records. The default value is false. Set to true to make learningCourseActivities available for this provider.
     * @return bool|null
    */
    public function getIsCourseActivitySyncEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isCourseActivitySyncEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCourseActivitySyncEnabled'");
    }

    /**
     * Gets the learningContents property value. Learning catalog items for the provider.
     * @return array<LearningContent>|null
    */
    public function getLearningContents(): ?array {
        $val = $this->getBackingStore()->get('learningContents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LearningContent::class);
            /** @var array<LearningContent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningContents'");
    }

    /**
     * Gets the learningCourseActivities property value. The learningCourseActivities property
     * @return array<LearningCourseActivity>|null
    */
    public function getLearningCourseActivities(): ?array {
        $val = $this->getBackingStore()->get('learningCourseActivities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LearningCourseActivity::class);
            /** @var array<LearningCourseActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningCourseActivities'");
    }

    /**
     * Gets the loginWebUrl property value. Authentication URL to access the courses for the provider. Optional.
     * @return string|null
    */
    public function getLoginWebUrl(): ?string {
        $val = $this->getBackingStore()->get('loginWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginWebUrl'");
    }

    /**
     * Gets the longLogoWebUrlForDarkTheme property value. The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getLongLogoWebUrlForDarkTheme(): ?string {
        $val = $this->getBackingStore()->get('longLogoWebUrlForDarkTheme');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longLogoWebUrlForDarkTheme'");
    }

    /**
     * Gets the longLogoWebUrlForLightTheme property value. The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getLongLogoWebUrlForLightTheme(): ?string {
        $val = $this->getBackingStore()->get('longLogoWebUrlForLightTheme');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longLogoWebUrlForLightTheme'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the squareLogoWebUrlForDarkTheme property value. The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getSquareLogoWebUrlForDarkTheme(): ?string {
        $val = $this->getBackingStore()->get('squareLogoWebUrlForDarkTheme');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'squareLogoWebUrlForDarkTheme'");
    }

    /**
     * Gets the squareLogoWebUrlForLightTheme property value. The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     * @return string|null
    */
    public function getSquareLogoWebUrlForLightTheme(): ?string {
        $val = $this->getBackingStore()->get('squareLogoWebUrlForLightTheme');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'squareLogoWebUrlForLightTheme'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isCourseActivitySyncEnabled', $this->getIsCourseActivitySyncEnabled());
        $writer->writeCollectionOfObjectValues('learningContents', $this->getLearningContents());
        $writer->writeCollectionOfObjectValues('learningCourseActivities', $this->getLearningCourseActivities());
        $writer->writeStringValue('loginWebUrl', $this->getLoginWebUrl());
        $writer->writeStringValue('longLogoWebUrlForDarkTheme', $this->getLongLogoWebUrlForDarkTheme());
        $writer->writeStringValue('longLogoWebUrlForLightTheme', $this->getLongLogoWebUrlForLightTheme());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the isCourseActivitySyncEnabled property value. Indicates whether a provider can ingest learning course activity records. The default value is false. Set to true to make learningCourseActivities available for this provider.
     * @param bool|null $value Value to set for the isCourseActivitySyncEnabled property.
    */
    public function setIsCourseActivitySyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCourseActivitySyncEnabled', $value);
    }

    /**
     * Sets the learningContents property value. Learning catalog items for the provider.
     * @param array<LearningContent>|null $value Value to set for the learningContents property.
    */
    public function setLearningContents(?array $value): void {
        $this->getBackingStore()->set('learningContents', $value);
    }

    /**
     * Sets the learningCourseActivities property value. The learningCourseActivities property
     * @param array<LearningCourseActivity>|null $value Value to set for the learningCourseActivities property.
    */
    public function setLearningCourseActivities(?array $value): void {
        $this->getBackingStore()->set('learningCourseActivities', $value);
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
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
