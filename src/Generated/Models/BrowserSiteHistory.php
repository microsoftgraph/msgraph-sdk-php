<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The history for the site modifications
*/
class BrowserSiteHistory implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new browserSiteHistory and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSiteHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSiteHistory {
        return new BrowserSiteHistory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowRedirect property value. Boolean attribute that controls the behavior of redirected sites
     * @return bool|null
    */
    public function getAllowRedirect(): ?bool {
        return $this->getBackingStore()->get('allowRedirect');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the comment property value. The content for the site
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->getBackingStore()->get('comment');
    }

    /**
     * Gets the compatibilityMode property value. Controls what compatibility setting is used for specific sites or domains
     * @return BrowserSiteCompatibilityMode|null
    */
    public function getCompatibilityMode(): ?BrowserSiteCompatibilityMode {
        return $this->getBackingStore()->get('compatibilityMode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowRedirect' => fn(ParseNode $n) => $o->setAllowRedirect($n->getBooleanValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'compatibilityMode' => fn(ParseNode $n) => $o->setCompatibilityMode($n->getEnumValue(BrowserSiteCompatibilityMode::class)),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'mergeType' => fn(ParseNode $n) => $o->setMergeType($n->getEnumValue(BrowserSiteMergeType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'targetEnvironment' => fn(ParseNode $n) => $o->setTargetEnvironment($n->getEnumValue(BrowserSiteTargetEnvironment::class)),
        ];
    }

    /**
     * Gets the lastModifiedBy property value. The user who modified the site
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the mergeType property value. The merge type of the site
     * @return BrowserSiteMergeType|null
    */
    public function getMergeType(): ?BrowserSiteMergeType {
        return $this->getBackingStore()->get('mergeType');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the publishedDateTime property value. The time the site was last published
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('publishedDateTime');
    }

    /**
     * Gets the targetEnvironment property value. The render mode in Edge client that the site is supposed to open in
     * @return BrowserSiteTargetEnvironment|null
    */
    public function getTargetEnvironment(): ?BrowserSiteTargetEnvironment {
        return $this->getBackingStore()->get('targetEnvironment');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowRedirect', $this->getAllowRedirect());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeEnumValue('compatibilityMode', $this->getCompatibilityMode());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeEnumValue('mergeType', $this->getMergeType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
        $writer->writeEnumValue('targetEnvironment', $this->getTargetEnvironment());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowRedirect property value. Boolean attribute that controls the behavior of redirected sites
     * @param bool|null $value Value to set for the allowRedirect property.
    */
    public function setAllowRedirect(?bool $value): void {
        $this->getBackingStore()->set('allowRedirect', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the comment property value. The content for the site
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the compatibilityMode property value. Controls what compatibility setting is used for specific sites or domains
     * @param BrowserSiteCompatibilityMode|null $value Value to set for the compatibilityMode property.
    */
    public function setCompatibilityMode(?BrowserSiteCompatibilityMode $value): void {
        $this->getBackingStore()->set('compatibilityMode', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The user who modified the site
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the mergeType property value. The merge type of the site
     * @param BrowserSiteMergeType|null $value Value to set for the mergeType property.
    */
    public function setMergeType(?BrowserSiteMergeType $value): void {
        $this->getBackingStore()->set('mergeType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publishedDateTime property value. The time the site was last published
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

    /**
     * Sets the targetEnvironment property value. The render mode in Edge client that the site is supposed to open in
     * @param BrowserSiteTargetEnvironment|null $value Value to set for the targetEnvironment property.
    */
    public function setTargetEnvironment(?BrowserSiteTargetEnvironment $value): void {
        $this->getBackingStore()->set('targetEnvironment', $value);
    }

}
