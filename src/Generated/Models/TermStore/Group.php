<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Group extends Entity implements Parsable 
{
    /**
     * Instantiates a new group and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Group
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Group {
        return new Group();
    }

    /**
     * Gets the createdDateTime property value. Date and time of the group creation. Read-only.
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
     * Gets the description property value. Description that gives details on the term usage.
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
     * Gets the displayName property value. Name of the group.
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'parentSiteId' => fn(ParseNode $n) => $o->setParentSiteId($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getEnumValue(TermGroupScope::class)),
            'sets' => fn(ParseNode $n) => $o->setSets($n->getCollectionOfObjectValues([Set::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the parentSiteId property value. ID of the parent site of this group.
     * @return string|null
    */
    public function getParentSiteId(): ?string {
        $val = $this->getBackingStore()->get('parentSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentSiteId'");
    }

    /**
     * Gets the scope property value. Returns the type of the group. Possible values are: global, system, and siteCollection.
     * @return TermGroupScope|null
    */
    public function getScope(): ?TermGroupScope {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof TermGroupScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the sets property value. All sets under the group in a term [store].
     * @return array<Set>|null
    */
    public function getSets(): ?array {
        $val = $this->getBackingStore()->get('sets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Set::class);
            /** @var array<Set>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sets'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('parentSiteId', $this->getParentSiteId());
        $writer->writeEnumValue('scope', $this->getScope());
        $writer->writeCollectionOfObjectValues('sets', $this->getSets());
    }

    /**
     * Sets the createdDateTime property value. Date and time of the group creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description that gives details on the term usage.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Name of the group.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the parentSiteId property value. ID of the parent site of this group.
     * @param string|null $value Value to set for the parentSiteId property.
    */
    public function setParentSiteId(?string $value): void {
        $this->getBackingStore()->set('parentSiteId', $value);
    }

    /**
     * Sets the scope property value. Returns the type of the group. Possible values are: global, system, and siteCollection.
     * @param TermGroupScope|null $value Value to set for the scope property.
    */
    public function setScope(?TermGroupScope $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the sets property value. All sets under the group in a term [store].
     * @param array<Set>|null $value Value to set for the sets property.
    */
    public function setSets(?array $value): void {
        $this->getBackingStore()->set('sets', $value);
    }

}
