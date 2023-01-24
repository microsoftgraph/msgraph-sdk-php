<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVppEBook extends ManagedEBook implements Parsable 
{
    /**
     * Instantiates a new IosVppEBook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosVppEBook');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppEBook
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppEBook {
        return new IosVppEBook();
    }

    /**
     * Gets the appleId property value. The Apple ID associated with Vpp token.
     * @return string|null
    */
    public function getAppleId(): ?string {
        return $this->getBackingStore()->get('appleId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleId' => fn(ParseNode $n) => $o->setAppleId($n->getStringValue()),
            'genres' => fn(ParseNode $n) => $o->setGenres($n->getCollectionOfPrimitiveValues()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'seller' => fn(ParseNode $n) => $o->setSeller($n->getStringValue()),
            'totalLicenseCount' => fn(ParseNode $n) => $o->setTotalLicenseCount($n->getIntegerValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
            'vppOrganizationName' => fn(ParseNode $n) => $o->setVppOrganizationName($n->getStringValue()),
            'vppTokenId' => fn(ParseNode $n) => $o->setVppTokenId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the genres property value. Genres.
     * @return array<string>|null
    */
    public function getGenres(): ?array {
        return $this->getBackingStore()->get('genres');
    }

    /**
     * Gets the language property value. Language.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->getBackingStore()->get('language');
    }

    /**
     * Gets the seller property value. Seller.
     * @return string|null
    */
    public function getSeller(): ?string {
        return $this->getBackingStore()->get('seller');
    }

    /**
     * Gets the totalLicenseCount property value. Total license count.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->getBackingStore()->get('totalLicenseCount');
    }

    /**
     * Gets the usedLicenseCount property value. Used license count.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        return $this->getBackingStore()->get('usedLicenseCount');
    }

    /**
     * Gets the vppOrganizationName property value. The Vpp token's organization name.
     * @return string|null
    */
    public function getVppOrganizationName(): ?string {
        return $this->getBackingStore()->get('vppOrganizationName');
    }

    /**
     * Gets the vppTokenId property value. The Vpp token ID.
     * @return string|null
    */
    public function getVppTokenId(): ?string {
        return $this->getBackingStore()->get('vppTokenId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleId', $this->getAppleId());
        $writer->writeCollectionOfPrimitiveValues('genres', $this->getGenres());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('seller', $this->getSeller());
        $writer->writeIntegerValue('totalLicenseCount', $this->getTotalLicenseCount());
        $writer->writeIntegerValue('usedLicenseCount', $this->getUsedLicenseCount());
        $writer->writeStringValue('vppOrganizationName', $this->getVppOrganizationName());
        $writer->writeStringValue('vppTokenId', $this->getVppTokenId());
    }

    /**
     * Sets the appleId property value. The Apple ID associated with Vpp token.
     * @param string|null $value Value to set for the appleId property.
    */
    public function setAppleId(?string $value): void {
        $this->getBackingStore()->set('appleId', $value);
    }

    /**
     * Sets the genres property value. Genres.
     * @param array<string>|null $value Value to set for the genres property.
    */
    public function setGenres(?array $value): void {
        $this->getBackingStore()->set('genres', $value);
    }

    /**
     * Sets the language property value. Language.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the seller property value. Seller.
     * @param string|null $value Value to set for the seller property.
    */
    public function setSeller(?string $value): void {
        $this->getBackingStore()->set('seller', $value);
    }

    /**
     * Sets the totalLicenseCount property value. Total license count.
     * @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('totalLicenseCount', $value);
    }

    /**
     * Sets the usedLicenseCount property value. Used license count.
     * @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value): void {
        $this->getBackingStore()->set('usedLicenseCount', $value);
    }

    /**
     * Sets the vppOrganizationName property value. The Vpp token's organization name.
     * @param string|null $value Value to set for the vppOrganizationName property.
    */
    public function setVppOrganizationName(?string $value): void {
        $this->getBackingStore()->set('vppOrganizationName', $value);
    }

    /**
     * Sets the vppTokenId property value. The Vpp token ID.
     * @param string|null $value Value to set for the vppTokenId property.
    */
    public function setVppTokenId(?string $value): void {
        $this->getBackingStore()->set('vppTokenId', $value);
    }

}
