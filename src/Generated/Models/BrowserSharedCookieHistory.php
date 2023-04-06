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

class BrowserSharedCookieHistory implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new browserSharedCookieHistory and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSharedCookieHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSharedCookieHistory {
        return new BrowserSharedCookieHistory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the comment property value. The comment of the cookie
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->getBackingStore()->get('comment');
    }

    /**
     * Gets the displayName property value. The name of the cookie
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
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hostOnly' => fn(ParseNode $n) => $o->setHostOnly($n->getBooleanValue()),
            'hostOrDomain' => fn(ParseNode $n) => $o->setHostOrDomain($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'sourceEnvironment' => fn(ParseNode $n) => $o->setSourceEnvironment($n->getEnumValue(BrowserSharedCookieSourceEnvironment::class)),
        ];
    }

    /**
     * Gets the hostOnly property value. Boolean attribute that determines whether a cookie is  a host-only or domain cookie
     * @return bool|null
    */
    public function getHostOnly(): ?bool {
        return $this->getBackingStore()->get('hostOnly');
    }

    /**
     * Gets the hostOrDomain property value. The URL of the cookie
     * @return string|null
    */
    public function getHostOrDomain(): ?string {
        return $this->getBackingStore()->get('hostOrDomain');
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the path property value. The path of the cookie
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->getBackingStore()->get('path');
    }

    /**
     * Gets the publishedDateTime property value. The time the cookie was published
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('publishedDateTime');
    }

    /**
     * Gets the sourceEnvironment property value. Specifies how the cookies are shared between Microsoft Edge and Internet Explorer
     * @return BrowserSharedCookieSourceEnvironment|null
    */
    public function getSourceEnvironment(): ?BrowserSharedCookieSourceEnvironment {
        return $this->getBackingStore()->get('sourceEnvironment');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('hostOnly', $this->getHostOnly());
        $writer->writeStringValue('hostOrDomain', $this->getHostOrDomain());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
        $writer->writeEnumValue('sourceEnvironment', $this->getSourceEnvironment());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the comment property value. The comment of the cookie
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the displayName property value. The name of the cookie
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the hostOnly property value. Boolean attribute that determines whether a cookie is  a host-only or domain cookie
     * @param bool|null $value Value to set for the hostOnly property.
    */
    public function setHostOnly(?bool $value): void {
        $this->getBackingStore()->set('hostOnly', $value);
    }

    /**
     * Sets the hostOrDomain property value. The URL of the cookie
     * @param string|null $value Value to set for the hostOrDomain property.
    */
    public function setHostOrDomain(?string $value): void {
        $this->getBackingStore()->set('hostOrDomain', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the path property value. The path of the cookie
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

    /**
     * Sets the publishedDateTime property value. The time the cookie was published
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

    /**
     * Sets the sourceEnvironment property value. Specifies how the cookies are shared between Microsoft Edge and Internet Explorer
     * @param BrowserSharedCookieSourceEnvironment|null $value Value to set for the sourceEnvironment property.
    */
    public function setSourceEnvironment(?BrowserSharedCookieSourceEnvironment $value): void {
        $this->getBackingStore()->set('sourceEnvironment', $value);
    }

}
