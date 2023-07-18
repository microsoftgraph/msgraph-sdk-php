<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Singleton entity which is used to specify IE mode site metadata
*/
class BrowserSite extends Entity implements Parsable 
{
    /**
     * Instantiates a new browserSite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSite {
        return new BrowserSite();
    }

    /**
     * Gets the allowRedirect property value. Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
     * @return bool|null
    */
    public function getAllowRedirect(): ?bool {
        $val = $this->getBackingStore()->get('allowRedirect');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowRedirect'");
    }

    /**
     * Gets the comment property value. The comment for the site.
     * @return string|null
    */
    public function getComment(): ?string {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * Gets the compatibilityMode property value. The compatibilityMode property
     * @return BrowserSiteCompatibilityMode|null
    */
    public function getCompatibilityMode(): ?BrowserSiteCompatibilityMode {
        $val = $this->getBackingStore()->get('compatibilityMode');
        if (is_null($val) || $val instanceof BrowserSiteCompatibilityMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compatibilityMode'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the site was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deletedDateTime property value. The date and time when the site was deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowRedirect' => fn(ParseNode $n) => $o->setAllowRedirect($n->getBooleanValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'compatibilityMode' => fn(ParseNode $n) => $o->setCompatibilityMode($n->getEnumValue(BrowserSiteCompatibilityMode::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([BrowserSiteHistory::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'mergeType' => fn(ParseNode $n) => $o->setMergeType($n->getEnumValue(BrowserSiteMergeType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowserSiteStatus::class)),
            'targetEnvironment' => fn(ParseNode $n) => $o->setTargetEnvironment($n->getEnumValue(BrowserSiteTargetEnvironment::class)),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the history property value. The history of modifications applied to the site.
     * @return array<BrowserSiteHistory>|null
    */
    public function getHistory(): ?array {
        $val = $this->getBackingStore()->get('history');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BrowserSiteHistory::class);
            /** @var array<BrowserSiteHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'history'");
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the site.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the site was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the mergeType property value. The mergeType property
     * @return BrowserSiteMergeType|null
    */
    public function getMergeType(): ?BrowserSiteMergeType {
        $val = $this->getBackingStore()->get('mergeType');
        if (is_null($val) || $val instanceof BrowserSiteMergeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mergeType'");
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
     * Gets the status property value. The status property
     * @return BrowserSiteStatus|null
    */
    public function getStatus(): ?BrowserSiteStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof BrowserSiteStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the targetEnvironment property value. The targetEnvironment property
     * @return BrowserSiteTargetEnvironment|null
    */
    public function getTargetEnvironment(): ?BrowserSiteTargetEnvironment {
        $val = $this->getBackingStore()->get('targetEnvironment');
        if (is_null($val) || $val instanceof BrowserSiteTargetEnvironment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetEnvironment'");
    }

    /**
     * Gets the webUrl property value. The URL of the site.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowRedirect', $this->getAllowRedirect());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeEnumValue('compatibilityMode', $this->getCompatibilityMode());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('mergeType', $this->getMergeType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('targetEnvironment', $this->getTargetEnvironment());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the allowRedirect property value. Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
     * @param bool|null $value Value to set for the allowRedirect property.
    */
    public function setAllowRedirect(?bool $value): void {
        $this->getBackingStore()->set('allowRedirect', $value);
    }

    /**
     * Sets the comment property value. The comment for the site.
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the compatibilityMode property value. The compatibilityMode property
     * @param BrowserSiteCompatibilityMode|null $value Value to set for the compatibilityMode property.
    */
    public function setCompatibilityMode(?BrowserSiteCompatibilityMode $value): void {
        $this->getBackingStore()->set('compatibilityMode', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the site was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedDateTime property value. The date and time when the site was deleted.
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the history property value. The history of modifications applied to the site.
     * @param array<BrowserSiteHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->getBackingStore()->set('history', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the site.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the site was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the mergeType property value. The mergeType property
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
     * Sets the status property value. The status property
     * @param BrowserSiteStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowserSiteStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetEnvironment property value. The targetEnvironment property
     * @param BrowserSiteTargetEnvironment|null $value Value to set for the targetEnvironment property.
    */
    public function setTargetEnvironment(?BrowserSiteTargetEnvironment $value): void {
        $this->getBackingStore()->set('targetEnvironment', $value);
    }

    /**
     * Sets the webUrl property value. The URL of the site.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
