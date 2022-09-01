<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Group extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime Date and time of the group creation. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description that gives details on the term usage.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Name of the group.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $parentSiteId ID of the parent site of this group.
    */
    private ?string $parentSiteId = null;
    
    /**
     * @var TermGroupScope|null $scope Returns the type of the group. Possible values are: global, system, and siteCollection.
    */
    private ?TermGroupScope $scope = null;
    
    /**
     * @var array<Set>|null $sets All sets under the group in a term [store].
    */
    private ?array $sets = null;
    
    /**
     * Instantiates a new group and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.termStore.group');
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
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description that gives details on the term usage.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the group.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'parentSiteId' => function (ParseNode $n) use ($o) { $o->setParentSiteId($n->getStringValue()); },
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getEnumValue(TermGroupScope::class)); },
            'sets' => function (ParseNode $n) use ($o) { $o->setSets($n->getCollectionOfObjectValues(array(Set::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the parentSiteId property value. ID of the parent site of this group.
     * @return string|null
    */
    public function getParentSiteId(): ?string {
        return $this->parentSiteId;
    }

    /**
     * Gets the scope property value. Returns the type of the group. Possible values are: global, system, and siteCollection.
     * @return TermGroupScope|null
    */
    public function getScope(): ?TermGroupScope {
        return $this->scope;
    }

    /**
     * Gets the sets property value. All sets under the group in a term [store].
     * @return array<Set>|null
    */
    public function getSets(): ?array {
        return $this->sets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('parentSiteId', $this->parentSiteId);
        $writer->writeEnumValue('scope', $this->scope);
        $writer->writeCollectionOfObjectValues('sets', $this->sets);
    }

    /**
     * Sets the createdDateTime property value. Date and time of the group creation. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description that gives details on the term usage.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the group.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the parentSiteId property value. ID of the parent site of this group.
     *  @param string|null $value Value to set for the parentSiteId property.
    */
    public function setParentSiteId(?string $value ): void {
        $this->parentSiteId = $value;
    }

    /**
     * Sets the scope property value. Returns the type of the group. Possible values are: global, system, and siteCollection.
     *  @param TermGroupScope|null $value Value to set for the scope property.
    */
    public function setScope(?TermGroupScope $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the sets property value. All sets under the group in a term [store].
     *  @param array<Set>|null $value Value to set for the sets property.
    */
    public function setSets(?array $value ): void {
        $this->sets = $value;
    }

}
