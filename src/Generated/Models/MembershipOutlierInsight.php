<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembershipOutlierInsight extends GovernanceInsight implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new membershipOutlierInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.membershipOutlierInsight');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembershipOutlierInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembershipOutlierInsight {
        return new MembershipOutlierInsight();
    }

    /**
     * Gets the container property value. Navigation link to the container directory object. For example, to a group.
     * @return DirectoryObject|null
    */
    public function getContainer(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('container');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'container'");
    }

    /**
     * Gets the containerId property value. Indicates the identifier of the container, for example, a group ID.
     * @return string|null
    */
    public function getContainerId(): ?string {
        $val = $this->getBackingStore()->get('containerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'container' => fn(ParseNode $n) => $o->setContainer($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'containerId' => fn(ParseNode $n) => $o->setContainerId($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'member' => fn(ParseNode $n) => $o->setMember($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'memberId' => fn(ParseNode $n) => $o->setMemberId($n->getStringValue()),
            'outlierContainerType' => fn(ParseNode $n) => $o->setOutlierContainerType($n->getEnumValue(OutlierContainerType::class)),
            'outlierMemberType' => fn(ParseNode $n) => $o->setOutlierMemberType($n->getEnumValue(OutlierMemberType::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Navigation link to a member object who modified the record. For example, to a user.
     * @return User|null
    */
    public function getLastModifiedBy(): ?User {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the member property value. Navigation link to a member object. For example, to a user.
     * @return DirectoryObject|null
    */
    public function getMember(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('member');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'member'");
    }

    /**
     * Gets the memberId property value. Indicates the identifier of the user.
     * @return string|null
    */
    public function getMemberId(): ?string {
        $val = $this->getBackingStore()->get('memberId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberId'");
    }

    /**
     * Gets the outlierContainerType property value. The outlierContainerType property
     * @return OutlierContainerType|null
    */
    public function getOutlierContainerType(): ?OutlierContainerType {
        $val = $this->getBackingStore()->get('outlierContainerType');
        if (is_null($val) || $val instanceof OutlierContainerType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outlierContainerType'");
    }

    /**
     * Gets the outlierMemberType property value. The outlierMemberType property
     * @return OutlierMemberType|null
    */
    public function getOutlierMemberType(): ?OutlierMemberType {
        $val = $this->getBackingStore()->get('outlierMemberType');
        if (is_null($val) || $val instanceof OutlierMemberType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outlierMemberType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('container', $this->getContainer());
        $writer->writeStringValue('containerId', $this->getContainerId());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeObjectValue('member', $this->getMember());
        $writer->writeStringValue('memberId', $this->getMemberId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('outlierContainerType', $this->getOutlierContainerType());
        $writer->writeEnumValue('outlierMemberType', $this->getOutlierMemberType());
    }

    /**
     * Sets the container property value. Navigation link to the container directory object. For example, to a group.
     * @param DirectoryObject|null $value Value to set for the container property.
    */
    public function setContainer(?DirectoryObject $value): void {
        $this->getBackingStore()->set('container', $value);
    }

    /**
     * Sets the containerId property value. Indicates the identifier of the container, for example, a group ID.
     * @param string|null $value Value to set for the containerId property.
    */
    public function setContainerId(?string $value): void {
        $this->getBackingStore()->set('containerId', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Navigation link to a member object who modified the record. For example, to a user.
     * @param User|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?User $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the member property value. Navigation link to a member object. For example, to a user.
     * @param DirectoryObject|null $value Value to set for the member property.
    */
    public function setMember(?DirectoryObject $value): void {
        $this->getBackingStore()->set('member', $value);
    }

    /**
     * Sets the memberId property value. Indicates the identifier of the user.
     * @param string|null $value Value to set for the memberId property.
    */
    public function setMemberId(?string $value): void {
        $this->getBackingStore()->set('memberId', $value);
    }

    /**
     * Sets the outlierContainerType property value. The outlierContainerType property
     * @param OutlierContainerType|null $value Value to set for the outlierContainerType property.
    */
    public function setOutlierContainerType(?OutlierContainerType $value): void {
        $this->getBackingStore()->set('outlierContainerType', $value);
    }

    /**
     * Sets the outlierMemberType property value. The outlierMemberType property
     * @param OutlierMemberType|null $value Value to set for the outlierMemberType property.
    */
    public function setOutlierMemberType(?OutlierMemberType $value): void {
        $this->getBackingStore()->set('outlierMemberType', $value);
    }

}
