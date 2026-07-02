<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageSuggestionRelatedPeopleBased extends AccessPackageSuggestionReason implements Parsable 
{
    /**
     * Instantiates a new AccessPackageSuggestionRelatedPeopleBased and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageSuggestionRelatedPeopleBased');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageSuggestionRelatedPeopleBased
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageSuggestionRelatedPeopleBased {
        return new AccessPackageSuggestionRelatedPeopleBased();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'relatedPeople' => fn(ParseNode $n) => $o->setRelatedPeople($n->getCollectionOfObjectValues([Identity::class, 'createFromDiscriminatorValue'])),
            'relatedPeopleAssignmentCount' => fn(ParseNode $n) => $o->setRelatedPeopleAssignmentCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the relatedPeople property value. A collection of identities representing people related to the current user who may have access to similar resources. This property is only populated when the tenant's endUserSettings have relatedPeopleInsightLevel set to countAndNames. This includes both the user ID and display name information.
     * @return array<Identity>|null
    */
    public function getRelatedPeople(): ?array {
        $val = $this->getBackingStore()->get('relatedPeople');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Identity::class);
            /** @var array<Identity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedPeople'");
    }

    /**
     * Gets the relatedPeopleAssignmentCount property value. The number of related people who have assignments to this access package. This count is always provided regardless of the relatedPeopleInsightLevel setting.
     * @return int|null
    */
    public function getRelatedPeopleAssignmentCount(): ?int {
        $val = $this->getBackingStore()->get('relatedPeopleAssignmentCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedPeopleAssignmentCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('relatedPeople', $this->getRelatedPeople());
        $writer->writeIntegerValue('relatedPeopleAssignmentCount', $this->getRelatedPeopleAssignmentCount());
    }

    /**
     * Sets the relatedPeople property value. A collection of identities representing people related to the current user who may have access to similar resources. This property is only populated when the tenant's endUserSettings have relatedPeopleInsightLevel set to countAndNames. This includes both the user ID and display name information.
     * @param array<Identity>|null $value Value to set for the relatedPeople property.
    */
    public function setRelatedPeople(?array $value): void {
        $this->getBackingStore()->set('relatedPeople', $value);
    }

    /**
     * Sets the relatedPeopleAssignmentCount property value. The number of related people who have assignments to this access package. This count is always provided regardless of the relatedPeopleInsightLevel setting.
     * @param int|null $value Value to set for the relatedPeopleAssignmentCount property.
    */
    public function setRelatedPeopleAssignmentCount(?int $value): void {
        $this->getBackingStore()->set('relatedPeopleAssignmentCount', $value);
    }

}
