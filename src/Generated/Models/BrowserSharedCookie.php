<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowserSharedCookie extends Entity implements Parsable 
{
    /**
     * Instantiates a new browserSharedCookie and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSharedCookie
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSharedCookie {
        return new BrowserSharedCookie();
    }

    /**
     * Gets the comment property value. The comment of the cookie
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->getBackingStore()->get('comment');
    }

    /**
     * Gets the createdDateTime property value. The datetime that the admin created the cookie
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deletedDateTime property value. The datetime that the admin deleted the cookie
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('deletedDateTime');
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
        return array_merge(parent::getFieldDeserializers(), [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([BrowserSharedCookieHistory::class, 'createFromDiscriminatorValue'])),
            'hostOnly' => fn(ParseNode $n) => $o->setHostOnly($n->getBooleanValue()),
            'hostOrDomain' => fn(ParseNode $n) => $o->setHostOrDomain($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'sourceEnvironment' => fn(ParseNode $n) => $o->setSourceEnvironment($n->getEnumValue(BrowserSharedCookieSourceEnvironment::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowserSharedCookieStatus::class)),
        ]);
    }

    /**
     * Gets the history property value. The history of the cookie
     * @return array<BrowserSharedCookieHistory>|null
    */
    public function getHistory(): ?array {
        return $this->getBackingStore()->get('history');
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
     * Gets the lastModifiedBy property value. The identity of the admin who last updated the cookie
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The datetime that the admin last updated the cookie
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the path property value. The path of the cookie
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->getBackingStore()->get('path');
    }

    /**
     * Gets the sourceEnvironment property value. The sourceEnvironment property
     * @return BrowserSharedCookieSourceEnvironment|null
    */
    public function getSourceEnvironment(): ?BrowserSharedCookieSourceEnvironment {
        return $this->getBackingStore()->get('sourceEnvironment');
    }

    /**
     * Gets the status property value. The status property
     * @return BrowserSharedCookieStatus|null
    */
    public function getStatus(): ?BrowserSharedCookieStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeBooleanValue('hostOnly', $this->getHostOnly());
        $writer->writeStringValue('hostOrDomain', $this->getHostOrDomain());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeEnumValue('sourceEnvironment', $this->getSourceEnvironment());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the comment property value. The comment of the cookie
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the createdDateTime property value. The datetime that the admin created the cookie
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedDateTime property value. The datetime that the admin deleted the cookie
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of the cookie
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the history property value. The history of the cookie
     * @param array<BrowserSharedCookieHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->getBackingStore()->set('history', $value);
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
     * Sets the lastModifiedBy property value. The identity of the admin who last updated the cookie
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The datetime that the admin last updated the cookie
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the path property value. The path of the cookie
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

    /**
     * Sets the sourceEnvironment property value. The sourceEnvironment property
     * @param BrowserSharedCookieSourceEnvironment|null $value Value to set for the sourceEnvironment property.
    */
    public function setSourceEnvironment(?BrowserSharedCookieSourceEnvironment $value): void {
        $this->getBackingStore()->set('sourceEnvironment', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param BrowserSharedCookieStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowserSharedCookieStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
