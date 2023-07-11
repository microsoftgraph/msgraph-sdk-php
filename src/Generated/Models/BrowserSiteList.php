<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A singleton entity which is used to specify IE mode site list metadata
*/
class BrowserSiteList extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new browserSiteList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserSiteList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserSiteList {
        return new BrowserSiteList();
    }

    /**
     * Gets the description property value. The description of the site list.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of the site list.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'publishedBy' => fn(ParseNode $n) => $o->setPublishedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getStringValue()),
            'sharedCookies' => fn(ParseNode $n) => $o->setSharedCookies($n->getCollectionOfObjectValues([BrowserSharedCookie::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([BrowserSite::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowserSiteListStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the site list.
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
     * Gets the lastModifiedDateTime property value. The date and time when the site list was last modified.
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
     * Gets the publishedBy property value. The user who published the site list.
     * @return IdentitySet|null
    */
    public function getPublishedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('publishedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedBy'");
    }

    /**
     * Gets the publishedDateTime property value. The date and time when the site list was published.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('publishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedDateTime'");
    }

    /**
     * Gets the revision property value. The current revision of the site list.
     * @return string|null
    */
    public function getRevision(): ?string {
        $val = $this->getBackingStore()->get('revision');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revision'");
    }

    /**
     * Gets the sharedCookies property value. A collection of shared cookies defined for the site list.
     * @return array<BrowserSharedCookie>|null
    */
    public function getSharedCookies(): ?array {
        $val = $this->getBackingStore()->get('sharedCookies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BrowserSharedCookie::class);
            /** @var array<BrowserSharedCookie>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedCookies'");
    }

    /**
     * Gets the sites property value. A collection of sites defined for the site list.
     * @return array<BrowserSite>|null
    */
    public function getSites(): ?array {
        $val = $this->getBackingStore()->get('sites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BrowserSite::class);
            /** @var array<BrowserSite>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sites'");
    }

    /**
     * Gets the status property value. The status property
     * @return BrowserSiteListStatus|null
    */
    public function getStatus(): ?BrowserSiteListStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof BrowserSiteListStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('publishedBy', $this->getPublishedBy());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
        $writer->writeStringValue('revision', $this->getRevision());
        $writer->writeCollectionOfObjectValues('sharedCookies', $this->getSharedCookies());
        $writer->writeCollectionOfObjectValues('sites', $this->getSites());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the description property value. The description of the site list.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the site list.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the site list.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the site list was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the publishedBy property value. The user who published the site list.
     * @param IdentitySet|null $value Value to set for the publishedBy property.
    */
    public function setPublishedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('publishedBy', $value);
    }

    /**
     * Sets the publishedDateTime property value. The date and time when the site list was published.
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

    /**
     * Sets the revision property value. The current revision of the site list.
     * @param string|null $value Value to set for the revision property.
    */
    public function setRevision(?string $value): void {
        $this->getBackingStore()->set('revision', $value);
    }

    /**
     * Sets the sharedCookies property value. A collection of shared cookies defined for the site list.
     * @param array<BrowserSharedCookie>|null $value Value to set for the sharedCookies property.
    */
    public function setSharedCookies(?array $value): void {
        $this->getBackingStore()->set('sharedCookies', $value);
    }

    /**
     * Sets the sites property value. A collection of sites defined for the site list.
     * @param array<BrowserSite>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value): void {
        $this->getBackingStore()->set('sites', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param BrowserSiteListStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowserSiteListStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
