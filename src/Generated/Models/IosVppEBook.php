<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVppEBook extends ManagedEBook implements Parsable 
{
    /**
     * @var string|null $appleId The Apple ID associated with Vpp token.
    */
    private ?string $appleId = null;
    
    /**
     * @var array<string>|null $genres Genres.
    */
    private ?array $genres = null;
    
    /**
     * @var string|null $language Language.
    */
    private ?string $language = null;
    
    /**
     * @var string|null $seller Seller.
    */
    private ?string $seller = null;
    
    /**
     * @var int|null $totalLicenseCount Total license count.
    */
    private ?int $totalLicenseCount = null;
    
    /**
     * @var int|null $usedLicenseCount Used license count.
    */
    private ?int $usedLicenseCount = null;
    
    /**
     * @var string|null $vppOrganizationName The Vpp token's organization name.
    */
    private ?string $vppOrganizationName = null;
    
    /**
     * @var string|null $vppTokenId The Vpp token ID.
    */
    private ?string $vppTokenId = null;
    
    /**
     * Instantiates a new IosVppEBook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->appleId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleId' => function (ParseNode $n) use ($o) { $o->setAppleId($n->getStringValue()); },
            'genres' => function (ParseNode $n) use ($o) { $o->setGenres($n->getCollectionOfPrimitiveValues()); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getStringValue()); },
            'seller' => function (ParseNode $n) use ($o) { $o->setSeller($n->getStringValue()); },
            'totalLicenseCount' => function (ParseNode $n) use ($o) { $o->setTotalLicenseCount($n->getIntegerValue()); },
            'usedLicenseCount' => function (ParseNode $n) use ($o) { $o->setUsedLicenseCount($n->getIntegerValue()); },
            'vppOrganizationName' => function (ParseNode $n) use ($o) { $o->setVppOrganizationName($n->getStringValue()); },
            'vppTokenId' => function (ParseNode $n) use ($o) { $o->setVppTokenId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the genres property value. Genres.
     * @return array<string>|null
    */
    public function getGenres(): ?array {
        return $this->genres;
    }

    /**
     * Gets the language property value. Language.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the seller property value. Seller.
     * @return string|null
    */
    public function getSeller(): ?string {
        return $this->seller;
    }

    /**
     * Gets the totalLicenseCount property value. Total license count.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->totalLicenseCount;
    }

    /**
     * Gets the usedLicenseCount property value. Used license count.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        return $this->usedLicenseCount;
    }

    /**
     * Gets the vppOrganizationName property value. The Vpp token's organization name.
     * @return string|null
    */
    public function getVppOrganizationName(): ?string {
        return $this->vppOrganizationName;
    }

    /**
     * Gets the vppTokenId property value. The Vpp token ID.
     * @return string|null
    */
    public function getVppTokenId(): ?string {
        return $this->vppTokenId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleId', $this->appleId);
        $writer->writeCollectionOfPrimitiveValues('genres', $this->genres);
        $writer->writeStringValue('language', $this->language);
        $writer->writeStringValue('seller', $this->seller);
        $writer->writeIntegerValue('totalLicenseCount', $this->totalLicenseCount);
        $writer->writeIntegerValue('usedLicenseCount', $this->usedLicenseCount);
        $writer->writeStringValue('vppOrganizationName', $this->vppOrganizationName);
        $writer->writeStringValue('vppTokenId', $this->vppTokenId);
    }

    /**
     * Sets the appleId property value. The Apple ID associated with Vpp token.
     *  @param string|null $value Value to set for the appleId property.
    */
    public function setAppleId(?string $value ): void {
        $this->appleId = $value;
    }

    /**
     * Sets the genres property value. Genres.
     *  @param array<string>|null $value Value to set for the genres property.
    */
    public function setGenres(?array $value ): void {
        $this->genres = $value;
    }

    /**
     * Sets the language property value. Language.
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value ): void {
        $this->language = $value;
    }

    /**
     * Sets the seller property value. Seller.
     *  @param string|null $value Value to set for the seller property.
    */
    public function setSeller(?string $value ): void {
        $this->seller = $value;
    }

    /**
     * Sets the totalLicenseCount property value. Total license count.
     *  @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value ): void {
        $this->totalLicenseCount = $value;
    }

    /**
     * Sets the usedLicenseCount property value. Used license count.
     *  @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value ): void {
        $this->usedLicenseCount = $value;
    }

    /**
     * Sets the vppOrganizationName property value. The Vpp token's organization name.
     *  @param string|null $value Value to set for the vppOrganizationName property.
    */
    public function setVppOrganizationName(?string $value ): void {
        $this->vppOrganizationName = $value;
    }

    /**
     * Sets the vppTokenId property value. The Vpp token ID.
     *  @param string|null $value Value to set for the vppTokenId property.
    */
    public function setVppTokenId(?string $value ): void {
        $this->vppTokenId = $value;
    }

}
