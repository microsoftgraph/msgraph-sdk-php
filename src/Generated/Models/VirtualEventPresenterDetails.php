<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class VirtualEventPresenterDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VirtualEventPresenterDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventPresenterDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventPresenterDetails {
        return new VirtualEventPresenterDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bio property value. Bio of the presenter.
     * @return ItemBody|null
    */
    public function getBio(): ?ItemBody {
        $val = $this->getBackingStore()->get('bio');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bio'");
    }

    /**
     * Gets the company property value. The presenter's company name.
     * @return string|null
    */
    public function getCompany(): ?string {
        $val = $this->getBackingStore()->get('company');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'company'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bio' => fn(ParseNode $n) => $o->setBio($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'company' => fn(ParseNode $n) => $o->setCompany($n->getStringValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'linkedInProfileWebUrl' => fn(ParseNode $n) => $o->setLinkedInProfileWebUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'personalSiteWebUrl' => fn(ParseNode $n) => $o->setPersonalSiteWebUrl($n->getStringValue()),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getBinaryContent()),
            'twitterProfileWebUrl' => fn(ParseNode $n) => $o->setTwitterProfileWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the jobTitle property value. The presenter's job title.
     * @return string|null
    */
    public function getJobTitle(): ?string {
        $val = $this->getBackingStore()->get('jobTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobTitle'");
    }

    /**
     * Gets the linkedInProfileWebUrl property value. The presenter's LinkedIn profile URL.
     * @return string|null
    */
    public function getLinkedInProfileWebUrl(): ?string {
        $val = $this->getBackingStore()->get('linkedInProfileWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkedInProfileWebUrl'");
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
     * Gets the personalSiteWebUrl property value. The presenter's personal website URL.
     * @return string|null
    */
    public function getPersonalSiteWebUrl(): ?string {
        $val = $this->getBackingStore()->get('personalSiteWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalSiteWebUrl'");
    }

    /**
     * Gets the photo property value. The content stream of the presenter's photo.
     * @return StreamInterface|null
    */
    public function getPhoto(): ?StreamInterface {
        $val = $this->getBackingStore()->get('photo');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'photo'");
    }

    /**
     * Gets the twitterProfileWebUrl property value. The presenter's Twitter profile URL.
     * @return string|null
    */
    public function getTwitterProfileWebUrl(): ?string {
        $val = $this->getBackingStore()->get('twitterProfileWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'twitterProfileWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('bio', $this->getBio());
        $writer->writeStringValue('company', $this->getCompany());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('linkedInProfileWebUrl', $this->getLinkedInProfileWebUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('personalSiteWebUrl', $this->getPersonalSiteWebUrl());
        $writer->writeBinaryContent('photo', $this->getPhoto());
        $writer->writeStringValue('twitterProfileWebUrl', $this->getTwitterProfileWebUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bio property value. Bio of the presenter.
     * @param ItemBody|null $value Value to set for the bio property.
    */
    public function setBio(?ItemBody $value): void {
        $this->getBackingStore()->set('bio', $value);
    }

    /**
     * Sets the company property value. The presenter's company name.
     * @param string|null $value Value to set for the company property.
    */
    public function setCompany(?string $value): void {
        $this->getBackingStore()->set('company', $value);
    }

    /**
     * Sets the jobTitle property value. The presenter's job title.
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the linkedInProfileWebUrl property value. The presenter's LinkedIn profile URL.
     * @param string|null $value Value to set for the linkedInProfileWebUrl property.
    */
    public function setLinkedInProfileWebUrl(?string $value): void {
        $this->getBackingStore()->set('linkedInProfileWebUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the personalSiteWebUrl property value. The presenter's personal website URL.
     * @param string|null $value Value to set for the personalSiteWebUrl property.
    */
    public function setPersonalSiteWebUrl(?string $value): void {
        $this->getBackingStore()->set('personalSiteWebUrl', $value);
    }

    /**
     * Sets the photo property value. The content stream of the presenter's photo.
     * @param StreamInterface|null $value Value to set for the photo property.
    */
    public function setPhoto(?StreamInterface $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the twitterProfileWebUrl property value. The presenter's Twitter profile URL.
     * @param string|null $value Value to set for the twitterProfileWebUrl property.
    */
    public function setTwitterProfileWebUrl(?string $value): void {
        $this->getBackingStore()->set('twitterProfileWebUrl', $value);
    }

}
